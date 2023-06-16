<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["id"]) || !isset($_SESSION["username"]) || !isset($_SESSION["role"])) {
    header("location: login.php");
    exit;
}

// Periksa peran pengguna dan arahkan ke halaman yang sesuai
if ($_SESSION["role"] === "Admin") {
    header("location: admin.php");
    exit;
} elseif ($_SESSION["role"] === "Siswa") {
    header("location: daftar.php");
    exit;
}
?>
