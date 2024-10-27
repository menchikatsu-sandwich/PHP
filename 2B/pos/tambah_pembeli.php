<html>
<head>
    <title>DATA USER</title>
    <link href="pos/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav></nav>
    <h3>TAMBAH DATA PEMBELI</h3>
        <form method="post" action="tambahPBL_aksi.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id_member"></td>
                </tr>
                <tr>
                    <td>Nama Member</td>
                    <td><input type="text" name="nama_member"></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><input type="number" name="nik"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>NO TELP</td>
                    <td><input type="number" name="nohp"></td>
                </tr>
                <tr>
                    <td></td></td>
                    <td><input type="submit" name="SIMPAN"></td>
                </tr>
            </table>
        </form>
</body>
    <script src="pos/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</html>