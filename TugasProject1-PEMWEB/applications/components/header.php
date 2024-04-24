<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php 
        $current_path = $_SERVER['REQUEST_URI'];

        if(strpos($current_path, "/pemweb/projek1/applications/views/register_page.php") !== false) {
            ?>
            <link rel="stylesheet" href="../assets/css/stylereg.css" />
            <title>Register</title>
            <?php
        } elseif (strpos($current_path, "/pemweb/projek1/applications/views/login_page.php") !== false) {
            ?>
            <link rel="stylesheet" href="../assets/css/stylelog.css" />
            <title>Login</title>
            <?php
        } elseif (strpos($current_path, "/pemweb/projek1/applications/views/posting_page.php") !== false) {
            ?>
            <link rel="stylesheet" href="../assets/css/stylepost.css" />
            <title>Posting Barang</title>
            <?php
        } elseif (strpos($current_path, "/pemweb/projek1/index.php") !== false) {
            ?>
            <link rel="stylesheet" href="./applications/assets/css/style.css" />
            <title>BeliBarang.id</title>
            <?php
        }
    ?>
    
    <?php
    include 'connection.php';
    session_start();

    $file = basename($_SERVER['PHP_SELF']);

    if(!isset($_SESSION['status'])) {
        $protected = array('index.php', 'posting_page.php', 'logout.php');

        if(in_array($file, $protected)) {
            header("location:index.php");
        }
        if($file == "posting_page.php") {
            echo "<scritp>alert('login dulu bro')</scritp>";
            header("location:login_page.php?alert=login-dulu");
        }
    } else {
        $protected = array('login_page.html', 'register_page.html');

        if(in_array($file, $protected)) {
            header("location:index.php");
        }

        if($file == "posting_page.php" && $_SESSION['user_role'] != 'seller'){
            header('location: ../../index.php');
        }
    }
    ?>
</head>
<body>
    