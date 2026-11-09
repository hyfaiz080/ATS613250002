<?php
session_start();
include 'koneksi.php';

if (isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

$error = "";

if (isset($_POST['login'])) {
    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = md5($_POST['password']);

    $query  = "SELECT * FROM member_002 WHERE email='$email' AND password='$password' AND aktive='1'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id']    = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['nama']  = $row['nama'];

        header("Location: index.php");
        exit();
    } else {
        $error = "Email atau Password salah / akun tidak aktif!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dark System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">

<div class="glass-card p-5" style="width: 100%; max-width: 420px;">
    <div class="text-center mb-4">
        <h3 class="fw-bold navbar-brand-neon">SYSTEM LOGIN</h3>
        <p class="text-muted small">Aplikasi Rental Mobil ATSNPM</p>
    </div>
    
    <?php if ($error != "") : ?>
        <div class="alert alert-danger bg-danger text-white border-0 py-2 fs-6 mb-3"><?= $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label text-slate-300">Email Address</label>
            <input type="email" name="email" class="form-control form-control-dark py-2" required placeholder="nama@email.com">
        </div>
        <div class="mb-4">
            <label class="form-label text-slate-300">Password</label>
            <input type="password" name="password" class="form-control form-control-dark py-2" required placeholder="••••••••">
        </div>
        <button type="submit" name="login" class="btn btn-neon-primary w-100 py-2">Sign In</button>
    </form>
</div>

</body>
</html>