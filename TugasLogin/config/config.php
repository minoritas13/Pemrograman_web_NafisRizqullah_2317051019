<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "latihan_login_db";

$conn = mysqli_connect($host,$user,$password,$db);

if($conn){
    echo("koneksi berhasil");  
} else{
    die("koneksi gagal".mysqli_connect_error());
};

?>