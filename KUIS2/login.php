<?php

session_start();

include 'koneksi/koneksi.php';

$username = $_POST['nama'];
$password = $_POST['pass'];

$querry = "SELECT * FROM user WHERE nama = '$username'";
$result = mysqli_query($conn,$querry);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user['nama'];
    header('Location: dashboard.php');
}
