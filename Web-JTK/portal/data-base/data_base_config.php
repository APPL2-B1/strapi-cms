<?php
$server = "localhost";
$user = "bandang";
$password = "-X&8nRAfunP$";
$nama_database = "u1801190_web-jtk-db";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>