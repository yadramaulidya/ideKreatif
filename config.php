<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "idekreatif";
$conn = mysqli_connect($host, $username, $password, $database);
if ($conn->connect_error) {
    die("database gagal teroneksi: " . $conn->connect_error);
}
?>