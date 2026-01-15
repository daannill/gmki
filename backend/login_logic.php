<?php
session_start();

if(isset($_SESSION['user_id'])) {
    header("Location: index.php");
}

$error = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $getUser = $koneksi->query("SELECT user_id, password, role FROM `users_login` WHERE user_id = '$username' or email = '$username';")->fetch_assoc();

    if($getUser) {
        if($password = $getUser['password']) {
            $_SESSION['user_id'] = $getUser['user_id'];
            $_SESSION['role'] = $getUser['role'];

            header("Location: index.php");
            exit;
        }
    }

    $error = "Username or Password is wrong";
}
