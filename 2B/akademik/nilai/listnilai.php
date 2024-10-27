<?php
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM nilai_mahasiswa");
?>
<html>
<head>
    <title>List Nilai Mahasiswa</title>
</head>
<body>
    <h3>List Nilai Mahasiswa</h3>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Semester</th>
            <th>Jumlah SKS</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Rata-Rata</th>
            <th>Keterangan</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['jumlah_sks']; ?></td>
            <td><?php echo $row['nilai_uts']; ?></td>
            <td><?php echo $row['nilai_uas']; ?></td>
            <td><?php echo $row['rata_rata']; ?></td>
            <td><?php echo $row['keterangan']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>