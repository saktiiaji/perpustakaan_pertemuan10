<?php

require_once "koneksi.php";

$sql = "SELECT * FROM anggota";

$hasil = mysqli_query($koneksi, $sql);

$jumlah = mysqli_num_rows($hasil);
// echo $jumlah;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota</title>
</head>
<body>
    <h1>Data Anggota Perpustakaan</h1>
    <title>Pendaftaran Anggota Perpustakaan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #1f3864; }
    </style>
    <a href="form_anggota.php">Kembali ke Form</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th><th>No Anggota</th><th>Nama Lengkap</th><th>Email</th><th>No HP</th><th>Jenis Anggota</th><th>Alamat</th><th>Aksi</th>
        </tr>
        <?php $no = 1; while ($baris = mysqli_fetch_assoc($hasil)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($baris['no_anggota']); ?></td>
            <td><?php echo htmlspecialchars($baris['nama_lengkap']); ?></td>
            <td><?php echo htmlspecialchars($baris['email']); ?></td>
            <td><?php echo htmlspecialchars($baris['no_hp']); ?></td>
            <td><?php echo htmlspecialchars($baris['jenis_anggota']); ?></td>
            <td><?php echo htmlspecialchars($baris['alamat']); ?></td>
            <td>
                <a href="edit.php?id=<?php echo (int)$baris['id']; ?>">Edit</a>
                <a href="detail.php?id=<?php echo (int)$baris['id']; ?>">Detail</a>
                <form class="inline" action="hapus.php" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                    <input type="hidden" name="id" value="<?php echo (int)$baris['id']; ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php mysqli_free_result($hasil); ?>
</body>
</html>
