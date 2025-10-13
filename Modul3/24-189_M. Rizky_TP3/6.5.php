<?php
$angka = array(10, 20, 30, 40, 50);
$hasil = array_filter($angka, fn($x) => $x > 25);

echo "Angka lebih dari 25: <br>";
print_r($hasil);
?>