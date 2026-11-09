<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['id'])) { header("Location: login.php"); exit(); }

// Menangkap parameter id dari URL
$no_id = $_GET['id'];

// Perintah HAPUS data berdasarkan ID
$query = "DELETE FROM mobil_002 WHERE no_id='$no_id'";
mysqli_query($koneksi, $query);

header("Location: index.php");
exit();
?>