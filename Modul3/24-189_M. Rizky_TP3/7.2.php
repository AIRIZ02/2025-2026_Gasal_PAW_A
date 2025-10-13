<?php
$students = array(
    array("Alex", "220401", array(85, 90, 88)),
    array("Bianca", "220402", array(78, 82, 80)),
    array("Candice", "220403", array(92, 89, 95)),
    array("Darren", "220404", array(70, 75, 72)),
    array("Elena", "220405", array(88, 84, 90))
);

for ($i = 0; $i < count($students); $i++) {
    $nama = $students[$i][0];
    $nim = $students[$i][1];
    $nilai = $students[$i][2];

    $total = 0;
    for ($j = 0; $j < count($nilai); $j++) {
        $total += $nilai[$j];
    }
    $rata = $total / count($nilai);

    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Nilai: ";
    for ($k = 0; $k < count($nilai); $k++) {
        echo $nilai[$k] . " ";
    }
    echo "<br>";
    echo "Rata-rata: " . $rata . "<br><br>";
}
?>
