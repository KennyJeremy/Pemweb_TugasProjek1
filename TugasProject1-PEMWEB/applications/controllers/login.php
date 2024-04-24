<?php

include '../config/connection.php';


if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "
            SELECT * FROM users WHERE email='$email' AND password='$password'
        ";

        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            session_start();
            $data = $result->fetch_assoc();

            unset($_SESSION['user_id']);
            unset($_SESSION['name']);
            unset($_SESSION['role']);
            unset($_SESSION['status']);

            $_SESSION['user_id'] = $data['user_id'];
            $_SESSION['user_role'] = $data['role'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['status'] = "login";
        } 
    } else {
        echo "Missing Data";
    }
} else {
    echo "This script only handles POST requests.";
}

$conn->close();


?>