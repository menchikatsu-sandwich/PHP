<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM nilai_mahasiswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>
<html>
<head>
    <title>Edit Nilai Mahasiswa</title>
</head>
<body>
    <h3>Edit Nilai Mahasiswa</h3>
    <form method="post" action="updatenilai.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $data['nim']; ?>"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type="number" name="semester" value="<?php echo $data['semester']; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah SKS</td>
                <td><input type="number" name="jumlah_sks" value="<?php echo $data['jumlah_sks']; ?>"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="number" name="nilai_uts" value="<?php echo $data['nilai_uts']; ?>"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="number" name="nilai_uas" value="<?php echo $data['nilai_uas']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>