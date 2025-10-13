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

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>No HP</th>
    </tr>";

for ($i = 0; $i < count($students); $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $students[$i][0] . "</td>";
    echo "<td>" . $students[$i][1] . "</td>";
    echo "<td>" . $students[$i][2] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
