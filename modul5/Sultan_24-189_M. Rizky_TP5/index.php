<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM supplier");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Master Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Data Master Supplier</h2>
    <div class="top-btn">
        <a href="tambah.php" class="btn btn-success">Tambah Data</a>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>Tindakan</th>
        </tr>
        <?php $no = 1; while($row = mysqli_fetch_array($data)): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['telp']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger"
                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
