<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

$height["David"] = "180";
$height["Ethan"] = "175";
$height["Felix"] = "178";
$height["George"] = "168";
$height["Harry"] = "182";

foreach($height as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>