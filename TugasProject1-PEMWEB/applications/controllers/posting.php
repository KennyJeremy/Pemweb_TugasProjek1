<?php

include '../config/connection.php';

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(isset($_POST['nama'], $_POST['deskripsi'], $_POST['harga'], $_POST['jumlah'], $_FILES['uploadedfile']['name'])) {
            $name = $_POST['nama'];
            $description = $_POST['deskripsi'];
            $stock = $_POST['jumlah'];
            $price = $_POST['harga'];
            
            $target_path = "../uploads/";
            $target_path = $target_path . basename($_FILES['uploadedfile']['name']);
            
            if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],
            $target_path)) {
                echo "The file ". basename( $_FILES['uploadedfile']['name']). " has
                been uploaded";
                session_start();
                
                $user_id = $_SESSION['user_id'];
                $file_path = str_replace("../uploads", "./applications/uploads", $target_path); 

                $sql = "
                    INSERT INTO products (name, description, price, stock, file_path, user_id)
                    VALUES (
                        '$name', '$description', '$price', '$stock', '$file_path', '$user_id'
                    )
                ";

                if ($conn->query($sql) === TRUE) {
                    echo "Data produk berhasil ditambahkan ke database";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "There was an error uploading the file, please try again!";
            }
        } else {
            echo "Silakan lengkapi semua bidang formulir!";
        }
    }

    $conn->close();
?>
