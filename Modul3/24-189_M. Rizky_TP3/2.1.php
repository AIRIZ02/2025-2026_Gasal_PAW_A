<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
$newfruits =  array("Durian", "Elderberry", "Fig", "Grapes", "Honeydew");

for ($i = 0; $i < count($newfruits); $i++) {
    $fruits[] = $newfruits[$i];
}

$arrlength = count($fruits);

for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}
?>
