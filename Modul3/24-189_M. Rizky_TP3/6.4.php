<?php
$nilai = array("Andi"=>80, "Budi"=>90);
$cari = array_search("Budi", array_keys($nilai));

echo "Posisi 'Budi' di array keys: $cari";
?>