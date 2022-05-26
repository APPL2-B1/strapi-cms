<?php
$server = "localhost";
$user = "root";
$password = "password";
$nama_database = "web_jtk";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>