<?php
require_once "koneksi.php";
// Memastikan data dikirim menggunakan metode POST
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
// header("Location: data.php");
    // exit();


// Mengambil ID anggota
$id = $_POST['id'];

// Membuat query delete
$query = "DELETE FROM anggota WHERE id = ?";
// Menyiapkan statement
$stmt = mysqli_prepare($koneksi, $query);
// Mengikat parameter
mysqli_stmt_bind_param($stmt, "i", $id);

// Menjalanakan query DELETE
if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    header("Location: data.php");
    exit();
} else {
    die("Gagal menghapus data anggota: " . mysqli_stmt_error($stmt));
}

?>