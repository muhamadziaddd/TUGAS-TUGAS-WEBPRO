<?php
session_start();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat_lengkap'];

    // Menyimpan data ke session
    $_SESSION['nama'] = $nama;
    $_SESSION['jenis_kelamin'] = $jenis_kelamin;
    $_SESSION['tempat_lahir'] = $tempat_lahir;
    $_SESSION['tanggal_lahir'] = $tanggal_lahir;
    $_SESSION['agama'] = $agama;
    $_SESSION['alamat'] = $alamat;

    // Menyimpan data ke cookie
    setcookie('nama', $nama, time() + (86400 * 30), "/");
    setcookie('jenis_kelamin', $jenis_kelamin, time() + (86400 * 30), "/");
    setcookie('tempat_lahir', $tempat_lahir, time() + (86400 * 30), "/");
    setcookie('tanggal_lahir', $tanggal_lahir, time() + (86400 * 30), "/");
    setcookie('agama', $agama, time() + (86400 * 30), "/");
    setcookie('alamat', $alamat, time() + (86400 * 30), "/");

    // Redirect ke other_page.php
    header("Location: other_page.php");
    exit();
}
?>


