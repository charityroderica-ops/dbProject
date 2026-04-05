<?php
include 'koneksi.php';

$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

if (mysqli_stmt_execute($stmt)) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal simpan data";
}
?>