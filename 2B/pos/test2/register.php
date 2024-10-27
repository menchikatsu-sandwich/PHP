<!DOCTYPE html>
<html>
<head>
    <title>Daftar Member</title>
</head>
<body>
    <h2>Daftar Member</h2>
    <form action="proses_register.php" method="post">
        <label for="nama_member">Nama:</label>
        <input type="text" id="nama_member" name="nama_member" required><br><br>
        
        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" required><br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br><br>
        
        <label for="noHP">No HP:</label>
        <input type="text" id="noHP" name="noHP" required><br><br>
        
        <button type="submit">Daftar</button>
    </form>
</body>
</html>
