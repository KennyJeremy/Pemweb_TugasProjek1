<?php

include '../config/connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(isset($_POST['name'], $_POST['password'], $_POST['email'], $_POST['hp'], $_POST['alamat'], $_POST['role'])) {
        $name = $_POST['name'];
        $password = md5($_POST['password']);
        $email = $_POST['email'];
        $hp = $_POST['hp'];
        $alamat = $_POST['alamat'];
        $role = $_POST['role'];

        $cek_email = $conn -> query("SELECT * FROM users WHERE email = '$email'");

        if($cek_email -> num_rows > 0) {
            header("location:../views/register_page.php?alert=duplikat");
            exit();
        } else {
            $sql = "
            INSERT INTO users (name, password, email, hp, alamat, role) 
            VALUES (
                '$name', '$password', '$email', '$hp', '$alamat', '$role'
            )";
            
            if ($conn->query($sql) === TRUE) {
                echo "Registrasi Berhasil! ";
                // header("location:../views/login_page.php?alert=terdaftar");
                exit();
            } else {
                echo "Registrasi gagal";
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        echo "Missing Data";
    }
} else {
    echo "This script only handles POST requests.";
}

$conn->close()
?>