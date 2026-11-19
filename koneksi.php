<?php
// Koneksi ke database MySQL
// Nama : Tri Cahyo Sakti Aji
// NPM  : 250302030
// Kelas: TI - 2A

mysqli_report(MYSQLI_REPORT_OFF);

// Parameter koneksi
$host = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";

// Buat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Cek apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . htmlspecialchars(mysqli_connect_error()));
}

// Pakai utf8mb4 supaya huruf dan simbol tersimpan dengan benar
mysqli_set_charset($koneksi, "utf8mb4");
?>