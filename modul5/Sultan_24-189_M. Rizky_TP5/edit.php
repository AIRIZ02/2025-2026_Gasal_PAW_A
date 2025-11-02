<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id='$id'");
$row = mysqli_fetch_array($data);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    mysqli_query($koneksi, "UPDATE supplier SET nama='$nama', telp='$telp', alamat='$alamat' WHERE id='$id'");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Edit Data Master Supplier</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $row['nama']; ?>" required>
        <label>Telepon:</label>
        <input type="text" name="telp" value="<?= $row['telp']; ?>" required>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?= $row['alamat']; ?>" required>
        <input type="submit" name="update" value="Update" class="btn btn-warning">
        <a href="index.php" class="btn btn-danger">Kembali</a>
    </form>
</div>
</body>
</html>
