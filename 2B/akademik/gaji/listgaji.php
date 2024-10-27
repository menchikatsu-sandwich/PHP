<?php
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM karyawan");
?>
<html>
<head>
    <title>List Gaji Karyawan</title>
</head>
<body>
    <h3>List Gaji Karyawan</h3>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jabatan</th>
            <th>Gaji Pokok</th>
            <th>Hari Kerja</th>
            <th>Gaji Bersih</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['umur']; ?></td>
            <td><?php echo $row['jabatan']; ?></td>
            <td><?php echo $row['gaji_pokok']; ?></td>
            <td><?php echo $row['hari_kerja']; ?></td>
            <td><?php echo $row['gaji_bersih']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>