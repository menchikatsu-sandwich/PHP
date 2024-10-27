<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>
<html>
<head>
    <title>Edit Data Gaji Karyawan</title>
</head>
<body>
    <h3>Edit Data Gaji Karyawan</h3>
    <form method="post" action="updategaji.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" value="<?php echo $data['umur']; ?>"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>
                    <select name="jabatan">
                        <option value="staff" <?php if ($data['jabatan'] == 'staff') echo 'selected'; ?>>Staff</option>
                        <option value="manager" <?php if ($data['jabatan'] == 'manager') echo 'selected'; ?>>Manager</option>
                        <option value="supervisor" <?php if ($data['jabatan'] == 'supervisor') echo 'selected'; ?>>Supervisor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Hari Kerja</td>
                <td><input type="number" name="hari_kerja" value="<?php echo $data['hari_kerja']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>