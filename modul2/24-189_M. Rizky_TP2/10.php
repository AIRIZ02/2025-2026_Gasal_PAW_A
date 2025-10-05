<!DOCTYPE html>
<html>
<head>
    <title>Kasir Sederhana</title>
</head>
<body>
<h2>Kasir Sederhana</h2>
<hr>

<?php

if (isset($_POST['submit'])) {
    $menu = $_POST['menu'];    
    $jumlah = $_POST['jumlah'];
    $total = 0;

    echo "<h3>Daftar Menu</h3>";
    echo "1. Nasi Goreng = Rp15000<br>";
    echo "2. Mie Ayam = Rp12000<br>";
    echo "3. Ayam Geprek = Rp18000<br>";
    echo "4. Es Teh = Rp5000<br>";
    echo "5. Es Jeruk = Rp7000<br><hr>";

    switch ($menu) {
        case 1:
            $nama = "Nasi Goreng";
            $harga = 15000;
            break;
        case 2:
            $nama = "Mie Ayam";
            $harga = 12000;
            break;
        case 3:
            $nama = "Ayam Geprek";
            $harga = 18000;
            break;
        case 4:
            $nama = "Es Teh";
            $harga = 5000;
            break;
        case 5:
            $nama = "Es Jeruk";
            $harga = 7000;
            break;
        default:
            $nama = "Tidak diketahui";
            $harga = 0;
            echo "Menu tidak ditemukan!";
            break;
    }

    $subtotal = $harga * $jumlah;
    $total += $subtotal;

    echo "<p>Anda membeli <b>$jumlah $nama</b> seharga Rp $subtotal</p>";
    echo "<p><b>Total Bayar: Rp $total</b></p>";
} 
else {
    echo "<h3>Daftar Menu</h3>";
    echo "1. Nasi Goreng = Rp15000<br>";
    echo "2. Mie Ayam = Rp12000<br>";
    echo "3. Ayam Geprek = Rp18000<br>";
    echo "4. Es Teh = Rp5000<br>";
    echo "5. Es Jeruk = Rp7000<br><hr>";
    ?>

    <form method="post" action="">
        <label>Masukkan Nomor Menu (1-5):</label><br>
        <input type="number" name="menu"  required><br><br>

        <label>Masukkan Jumlah Pesanan:</label><br>
        <input type="number" name="jumlah" min="1" required><br><br>

        <input type="submit" name="submit" value="Hitung Total">
    </form>

<?php
}
?>
</body>
</html>
