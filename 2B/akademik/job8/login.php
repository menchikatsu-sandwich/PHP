<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Login Dengan PHP dan MySQLi</title>
</head>
<body>
    <h2>Login User dengan Session</h2>
    <br/>
<style>
</style>

    <!-- cek notif -->
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal username dan password salah!";
        } else if($_GET['pesan'] == "login"){
            echo "Anda telah berhasil login";
            header("location: menu_akademik.php");
            exit();
        } else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="post" action="cek_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>
</html>