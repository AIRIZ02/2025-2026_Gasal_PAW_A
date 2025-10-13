<?php
$students = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

$students[] = array("Darren", "220404", "0812345611");
$students[] = array("Elena", "220405", "0812345622");
$students[] = array("Felix", "220406", "0812345633");
$students[] = array("Grace", "220407", "0812345644");
$students[] = array("Henry", "220408", "0812345655");

for ($row = 0; $row < count($students); $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $students[$row][$col] . "</li>";
    }
    echo "</ul>";
}
?>
