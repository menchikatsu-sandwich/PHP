<html>
    <head>
        <title>CRUD PHP dan MySQLi</title>
    </head>
    <body>
        <h2 style="text-align:center">CRUD DATA BUKU REFERENSI</h2>
        <br/>
        <div class="buttonBack">
        <a style="margin-left:95%" href="listbuku.php">KEMBALI</a>
        </div>
        <br/>
        <br/>
        <h3>TAMBAH DATA BUKU</h3>
        <form method="post" action="tambah_buku.php">
            <table>
                <tr>
                    <td>Judul Referensi</td>
                    <td><input type="text" name="JudulReferensi"></td>
                </tr>
                <tr>
                    <td>Jenis Referensi</td>
                    <td><input type="text" name="JenisReferensi"></td>
                </tr>
                <tr>
                    <td>Jumlah Halaman</td>
                    <td><input type="number" name="JumlahHalaman"></td>
                </tr>
                <tr>
                    <td>NoISBN</td>
                    <td><input type="text" name="NoISBN"></td>
                </tr>
                <tr>
                    <td></td></td>
                    <td><input type="submit" name="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>