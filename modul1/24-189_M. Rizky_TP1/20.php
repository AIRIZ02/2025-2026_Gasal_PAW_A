<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        table {
            width: 60%;
            margin: 20px auto;
        }
        td, th {
            border: 1px solid;
            padding: 10px;
        }
        th {
            text-align: left;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
// Ambil data dari query string
$nama   = isset($_GET['nama']) ? $_GET['nama'] : 'Nama tidak diisi';
$lahir  = isset($_GET['lahir']) ? $_GET['lahir'] : 'Tanggal lahir tidak diisi';
$agama  = isset($_GET['agama']) ? $_GET['agama'] : 'Agama tidak diisi';
$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : 'Alamat tidak diisi';
$email  = isset($_GET['email']) ? $_GET['email'] : 'Email tidak diisi';
$no     = isset($_GET['no']) ? $_GET['no'] : 'Nomor HP tidak diisi';

$sd     = isset($_GET['sd']) ? $_GET['sd'] : '-';
$smp    = isset($_GET['smp']) ? $_GET['smp'] : '-';
$smk    = isset($_GET['smk']) ? $_GET['smk'] : '-';
$s1     = isset($_GET['s1']) ? $_GET['s1'] : '-';
?>

<h2>Biodata</h2>
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
        <th>Agama</th>
        <td><?php echo $agama; ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <th>No HP</th>
        <td><?php echo $no; ?></td>
    </tr>
    <tr>
        <th colspan="2">PENDIDIKAN</th>
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

<!-- untuk pemanggilan query string menggunakan format dibawah -->
<!-- http://localhost/24-189_M.%20Rizky_TP1/20.php?nama=M.%20Rizky&lahir=Bangkalan%2C02%20Februari%202004&agama=Islam&alamat=Dusun%20Buddan%2C%20Desa%20Sukolilo%20Timur%2C%20Kec.Labang%2C%20Kab.%20Bangkalan%20Madura&email=airizxmak@gmail.com&no=0827356611707&sd=SDN%20Sukolilo%20Timur%201&smp=SMP%20Islam%20Terpadu%20Al-Qolam&smk=SMK%20Informatika%20Al-Qolam&s1=Program%20Studi%20Teknik%20Informatika%2C%20Fakultas%20Teknik%2C%20Universitas%20Trunojoyo%20Madura -->
