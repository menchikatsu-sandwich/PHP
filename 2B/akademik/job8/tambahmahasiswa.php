<html>
<head>
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
<h3>TAMBAH DATA MAHASISWA</h3>
        <form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="gambar" accept="image/*"></td>
                </tr>
                <tr>
                    <td></td></td>
                    <td><input type="submit" name="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>