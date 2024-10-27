<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
    <h2>CRUD DATA MATA KULIAH</h2>
    <br>
    <a href="listmatkul.php">KEMBALI</a>
    <br>
    <br>
    <h3>EDIT DATA MATA KULIAH</h3>

    <?php
    include 'koneksi.php';
    $KodeMK=$_GET['KodeMK'];
    $data=mysqli_query($koneksi,"select * from matakuliah where KodeMK='$KodeMK'");
    while($d=mysqli_fetch_array($data)){
        ?>
        <form method="post" action="updatematkul.php">
            <input type="hidden" name="KodeMK" value="<?php echo $d['KodeMK'] ?>">
            <table>
                <tr>
                    <td>NamaMK</td>
                    <td>
                        <input type="text" name="NamaMK" value="<?php echo $d['NamaMK'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah SKS</td>
                    <td>
                        <input type="number" name="JumlahSKS" value="<?php echo $d['JumlahSKS'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>
                        <input type="number" name="Semester" value="<?php echo $d['Semester'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>MKInti</td>
                    <td><input type="radio" name="MKInti" Value="1">Ya
                        <input type="radio" name="MKInti" Value="0">Tidak
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="SIMPAN">
                    </td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>