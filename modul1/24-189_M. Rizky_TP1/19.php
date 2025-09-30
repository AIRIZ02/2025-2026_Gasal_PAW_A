<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
        }
        td, th {
            border: 1px solid;
            padding: 10px;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>

<?php
$nama = "M. Rizky";
$lahir = "Bangkalan,02 Februari 2004";
$agama = "Islam";
$alamat = "Dusun Buddan, Desa Sukolilo TImur, Kec.Labang, Kab. Bangkalan Madura";
$email = "airizxmak@gmail.com";
$no = "0827356611707";
$sd = "SDN Sukolilo Timur 1";
$smp = "SMP Islam Terpadu Al-Qolam";
$smk = "SMK Informatika Al-Qolam";
$s1 = "Program Studi Teknik Informatika, Fakultas Teknik, Universitas Trunojoyo Madura"
?>

<h2 style="text-align:center;">Biodata</h2>
<table>
    <tr>
        <th colspan="2">INFORMASI PRIBADI</th>
    </tr>
    <tr>
        <th>Nama</th>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <th>Tempat Tanggal Lahir</th>
        <td><?php echo $lahir; ?></td>
    </tr>
    <tr>
        <th>Hobi</th>
        <td><?php echo $agama; ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <th colspan="2">Pendidikan</th>
    </tr>
    <tr>
        <th>SD</th>
        <td><?php echo $sd; ?></td>
    </tr>
    <tr>
        <th>SMP</th>
        <td><?php echo $smp; ?></td>
    </tr>
    <tr>
        <th>SMK</th>
        <td><?php echo $smk; ?></td>
    </tr>
    <tr>
        <th>S1</th>
        <td><?php echo $s1; ?></td>
    </tr>
</table>

</body>
</html>
