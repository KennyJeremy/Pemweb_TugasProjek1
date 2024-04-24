<?php

$host = "localhost";
$username = "root";
$password = "rahasiapengguna";
$database = "projek_pemweb";

$conn = new mysqli($host, $username, $password, $database);

if($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
} else {
    // echo "Connection successful";
}

?>