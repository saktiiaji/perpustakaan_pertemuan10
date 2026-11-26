<?php
// Form pendaftaran anggota perpustakaan
// Nama : Tri Cahyo Sakti Aji
// NPM  : 250302030
// Kelas: TI - 2A

// dipakai untuk notifikasi sukses
$status = isset($_GET["status"]) ? $_GET["status"] : "";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Anggota Perpustakaan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #1f3864; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        label.pilihan { display: inline; font-weight: normal; margin-right: 16px; }
        input[type="text"], select, textarea { width: 320px; padding: 6px; }
        button { margin-top: 16px; padding: 8px 20px; }
        .sukses { background: #e6f4ea; border-left: 5px solid #2e7d32; padding: 10px; width: 320px; }
    </style>
</head>
<body>
    <h1>Pendaftaran Anggota Perpustakaan</h1>

    <a href="data.php">Lihat Data Anggota</a>

    <?php if ($status === "sukses") { ?>
    <p class="sukses">Data anggota berhasil disimpan.</p>
    <?php } ?>

    <form action="proses_anggota.php" method="post">
        <label for="no_anggota">Nomor Anggota</label>
        <input type="text" id="no_anggota" name="no_anggota" placeholder="masukan nomor anggota atau nim">

        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="masukan nama lengkap anda">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="masukan email anda yang terdaftar">

        <label for="no_hp">Nomor HP</label>
        <input type="text" id="no_hp" name="no_hp" placeholder="masukan no hp anda yang terdaftar">

        <label for="jenis_anggota">Jenis Anggota</label>
        <select id="jenis_anggota" name="jenis_anggota">
            <option value="">-- Pilih Jenis Anggota --</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
        </select>

        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" rows="6" placeholder="masukan alamat anda disini."></textarea><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>