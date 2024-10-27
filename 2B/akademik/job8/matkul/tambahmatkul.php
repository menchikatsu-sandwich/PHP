<html>
    <head>
        <title>CRUD PHP dan MySQLi</title>
    </head>
    <body>
        <h2 style="text-align:center">CRUD DATA MATAKULIAH/h2>
        <br/>
        <div class="buttonBack">
        <a style="margin-left:95%" href="listmatkul.php">KEMBALI</a>
        </div>
        <br/>
        <br/>
        <h3>TAMBAH DATA MATAKULIAH</h3>
        <form method="post" action="tambah_matkul.php">
            <table>
                <tr>
                    <td>KodeMK</td>
                    <td><input type="text" name="KodeMK"></td>
                </tr>
                <tr>
                    <td>NamaMK</td>
                    <td><input type="text" name="NamaMK"></td>
                </tr>
                <tr>
                    <td>JumlahSKS</td>
                    <td><input type="number" name="JumlahSKS"></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td><input type="number" name="Semester"></td>
                </tr>
                <tr>
                    <td>MKInti</td>
                    <td><input type="radio" name="MKInti" Value="1">Ya
                        <input type="radio" name="MKInti" Value="0">Tidak
                    </td>
                </tr>
                <tr>
                    <td></td></td>
                    <td><input type="submit" name="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>