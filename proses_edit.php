<?php
require_once "koneksi.php";

// Mengambil data dari form
$id            = $_POST['id'];
$no_anggota    = $_POST['no_anggota'];
$nama_lengkap  = $_POST['nama_lengkap'];
$email         = $_POST['email'];
$no_hp         = $_POST['no_hp'];
$jenis_anggota = $_POST['jenis_anggota'];
$alamat        = $_POST['alamat'];

// Query SQL untuk mengupdate data berdasarkan ID
$query = "UPDATE anggota SET 
            no_anggota = ?, 
            nama_lengkap = ?, 
            email = ?, 
            no_hp = ?, 
            jenis_anggota = ?, 
            alamat = ? 
            WHERE id = ?";

// Menyiapkan prepared statement
$stmt = mysqli_prepare($koneksi, $query);

// Mengikat parameter
mysqli_stmt_bind_param(
    $stmt,
    "ssssssi",
    $no_anggota,
    $nama_lengkap,
    $email,
    $no_hp,
    $jenis_anggota,
    $alamat,
    $id
);

if (mysqli_stmt_execute($stmt)){
    mysqli_stmt_close($stmt);
    header("Location: data.php");
    exit;
} else {
    die("Gagal mengubah data: " . mysqli_stmt_error($stmt));
}
?>