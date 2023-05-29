<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_penjualan";

// Membuat Koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Cek Koneksi
if (!$koneksi) {
    die("Connection failed:" . mysqli_connect_error());
}
?>