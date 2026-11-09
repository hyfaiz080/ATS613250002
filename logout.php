<?php
session_start();
// Membuang seluruh session aktif
session_unset();
session_destroy();

// Redirect kembali ke halaman login
header("Location: login.php");
exit();
?>