<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Dark Mode</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Dark Glassmorphism CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar Dark -->
<nav class="navbar navbar-expand-lg navbar-custom mb-4 py-3">
    <div class="container">
        <a class="navbar-brand navbar-brand-neon" href="index.php">🚗 RENTAL MOBIL [FAIZ FADHIL]</a>
        <?php if (isset($_SESSION['id'])) : ?>
            <div class="d-flex align-items-center">
                <span class="me-3 text-slate-300">Halo, <b class="text-info"><?= $_SESSION['nama']; ?></b></span>
                <a href="logout.php" class="btn btn-outline-danger btn-sm rounded-pill px-3">Logout</a>
            </div>
        <?php endif; ?>
    </div>
</nav>

<div class="container">