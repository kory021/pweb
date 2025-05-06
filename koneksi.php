<?php

// Membuat koneksi
$koneksi = mysqli_connect("localhost", "root", "", "akademik");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

