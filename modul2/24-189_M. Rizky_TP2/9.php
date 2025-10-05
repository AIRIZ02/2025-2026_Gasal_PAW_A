<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<h2>Konversi Nilai ke Grade</h2>

<form method="post">
    Nilai Mahasiswa: <input type="number" name="nilai" required><br><br>
    <input type="submit" value="Konversi">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST["nilai"];

if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

    echo "<br>Nilai mahasiswa: " . $nilai . "<br>";
    echo "Grade: " . $grade . "<br>";
}
?>

</body>
</html>