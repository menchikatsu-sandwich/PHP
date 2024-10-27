<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
    <h2>CRUD DATA BUKU</h2>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM bukureferensi WHERE KodeReferensi='$id'");
    $d = mysqli_fetch_array($query);
    ?>

    <form action="updatebuku.php" method="post">
        <input type="hidden" name="id" value="<?php echo $d['KodeReferensi']; ?>">
        <table>
            <tr>
                <td>Judul Referensi</td>
                <td><input type="text" name="JudulReferensi" value="<?php echo $d['JudulReferensi']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Referensi</td>
                <td><input type="text" name="JenisReferensi" value="<?php echo $d['JenisReferensi']; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah Halaman</td>
                <td><input type="number" name="JumlahHalaman" value="<?php echo $d['JumlahHalaman']; ?>"></td>
            </tr>
            <tr>
                <td>NO ISBN</td>
                <td><input type="text" name="NoISBN" value="<?php echo $d['NoISBN']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>