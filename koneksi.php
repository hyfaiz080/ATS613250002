<?php
// Variabel konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ats613250002";

// Fungsi untuk menghubungkan PHP dengan database MySQL
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek status koneksi
if (!$koneksi) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}
?>