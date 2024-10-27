<?php
    $expire = time()+10;
    setcookie('kunjungan',1,$expire);

?>
<html>
    <head>
        <tittle>Program Cookies</tittle>
    </head>
    <body>
        <h2>Program Cookies</h2>
        <?php
        if(isset($_COOKIE['kunjungan'])){
            echo "Selamat Datang Kembali";
        }else{
            echo "Selamat Datang, Anda adalah pengunjung pertama kali";
        }
        ?>
    </body>
</html>