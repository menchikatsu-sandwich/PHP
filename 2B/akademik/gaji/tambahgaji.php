<html>
<head>
    <title>Tambah Data Gaji Karyawan</title>
</head>
<body>
    <h3>Tambah Data Gaji Karyawan</h3>
    <form method="post" action="tambah_gaji.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>
                    <select name="jabatan">
                        <option value="staff">Staff</option>
                        <option value="manager">Manager</option>
                        <option value="supervisor">Supervisor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Hari Kerja</td>
                <td><input type="number" name="hari_kerja"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>