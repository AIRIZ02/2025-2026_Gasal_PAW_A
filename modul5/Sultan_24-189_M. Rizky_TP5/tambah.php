<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    mysqli_query($koneksi, "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama','$telp','$alamat')");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Tambah Data Master Supplier Baru</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Telepon:</label>
        <input type="text" name="telp" required>
        <label>Alamat:</label>
        <input type="text" name="alamat" required>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        <a href="index.php" class="btn btn-danger">Kembali</a>
    </form>
</div>
</body>
</html>
