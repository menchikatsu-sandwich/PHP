<h2>Register</h2>
<form action="<?= BASEURL ?>/User/register" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="alamat">Alamat:</label>
    <textarea id="alamat" name="alamat" required></textarea>
    
    <button type="submit">Register</button>
</form>
<p>Already have an account? <a href="<?= BASEURL ?>/user/login">Login here</a></p>
