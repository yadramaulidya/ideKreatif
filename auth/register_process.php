<?php
require_once("../config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $name = $_POST["name"];
    $passowrd = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, name, password)
    VALUES ('$username', '$name', '$hashedPassword')";
    
    if ($conn->query($sql) === TRUE) {
    
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Registrasi Berhasil!'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal Registrasi: ' . mysqli_error($conn)
        ];
    }
    header('Location: login.php');
    exit();
}

    $conn->close();
?>