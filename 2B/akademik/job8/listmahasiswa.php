<!DOCTYPE html>
<html>
    <head>
        <title> CRUD PHP dan MYSQLI </title>
    </head>
    <body>
        <h2>CRUD DATA MAHASISWA</h2>
        <br>
        <a href="tambahmahasiswa.php">+ Tambah Mahasiswa</a>
        <br>
        <br>
        <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Gambar</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
       
        //batas pagination
        $batas=10;
        $halaman= @$_GET['halaman'];
        if(empty($halaman)){
            $posisi=0;
            $halaman=1;
        }else{
            $posisi=($halaman-1)* $batas;
        }
        //No agar tidak berulang
        $no=($halaman-1)*$batas+1;

        $query2=mysqli_query($koneksi,"select * from mahasiswa");
        $jmldata=mysqli_num_rows(($query2));
        $jmlhalaman=ceil($jmldata/$batas);

        echo"<br> Halaman : ";

        for($i=1;$i<=$jmlhalaman;$i++)  
        if($i != $halaman){
            echo" <a href=\"listmahasiswa_page.php?halaman=$i\">$i</a> | ";
        }else{
            echo"<b>$i</b> | ";
        }

        echo"<p>Total anggota : <b>$jmldata</b> orang</p>";
        $query="select * from mahasiswa LIMIT $posisi,$batas";
        $data=mysqli_query($koneksi, $query);
        while($d=mysqli_fetch_array($data)){
            ?>
        <tr>
            <td><?php echo $no++; ?> </td>
            <td><?php echo $d['nama']; ?> </td>
            <td><?php echo $d['nim']; ?> </td>
            <td><?php echo $d['alamat']; ?> </td>
            <td><img src="gambar/<?php echo $d['gambar']; ?>" width="200"></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>" > EDIT </a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>" > HAPUS </a>
            </td>
        </tr>
        <?php
        }
        ?>
        </table>
    </body>
</html>