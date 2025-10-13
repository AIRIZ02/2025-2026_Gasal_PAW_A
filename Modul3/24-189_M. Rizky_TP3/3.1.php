<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

$height["David"] = "180";
$height["Ethan"] = "175";
$height["Felix"] = "178";
$height["George"] = "168";
$height["Harry"] = "182";


$lastValue = end($height);
$lastKey = key($height);

echo "Data terakhir adalah: $lastKey dengan value $lastValue";
?>
