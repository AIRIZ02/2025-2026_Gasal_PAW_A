<?php
$produk = array(
    "Buku" => 15000,
    "Pensil" => 3000,
    "Penghapus" => 2000,
    "Pulpen" => 5000,
    "Penggaris" => 4000
);

echo "Daftar Produk dan Harganya:<br><br>";

foreach ($produk as $nama => $harga) {
    echo "Produk: " . $nama . " - Harga: Rp" . $harga . "<br>";
}
?>
