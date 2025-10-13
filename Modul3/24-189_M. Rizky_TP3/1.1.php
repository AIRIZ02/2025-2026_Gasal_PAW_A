<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . "."."<br>";
array_push($fruits, "Durian", "Mango", "Apple", "Orange", "Grape");
print_r($fruits);
echo "<br>Nilai dengan indeks tertinggi: " . $fruits[count($fruits)-1];
echo "<br>Indeks tertinggi: " . (count($fruits)-1);
?>