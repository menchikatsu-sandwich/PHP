<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
    <h2>CRUD DATA BUKU REFERENSI</h2>
    <br/>
    <a href="tambahbuku.php">+ TAMBAH BUKU</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Judul Referensi</th>
            <th>Jenis Referensi</th>
            <th>Jumlah Halaman</th>
            <th>NO ISBN</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;

        // Langkah 1 tentukan batas halaman
        $batas = 5;
        $halaman = @$_GET['halaman'];
        if(empty($halaman)){
            $posisi = 0;
            $halaman = 1;
        } else {
            $posisi = ($halaman-1) * $batas;
        }
            // hitung nomor agar tidak berulang
            $no = ($halaman - 1) * $batas + 1;

        // langkah 2 hitung total data dan halaman, serta link 1,2,3
        $query2 = mysqli_query($koneksi, "select * from bukureferensi");
        $jmldata = mysqli_num_rows($query2);
        $jmlhalaman = ceil($jmldata/$batas);

        echo "<br/> Halaman : ";

        for($i=1;$i<=$jmlhalaman;$i++)
        if($i != $halaman){
            echo " <a href=\"listbuku_page.php?halaman=$i\">$i</a> | ";
        } else {
            echo " <b>$i</b> | ";
        }
        echo "<p>Total Buku : <b>$jmldata</b> </p>";
        // Langkah 3 sesuaikan query dgn posisi dan batas
        $query = "select * from bukureferensi LIMIT $posisi,$batas";

        $data = mysqli_query($koneksi,$query);
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['JudulReferensi']; ?></td>
                <td><?php echo $d['JenisReferensi']; ?></td>
                <td><?php echo $d['JumlahHalaman']; ?></td>
                <td><?php echo $d['NoISBN']; ?></td>
                <td>
                    <a href="editbuku.php?id=<?php echo $d['KodeReferensi']; ?>">EDIT</a>
                    <a href="hapusbuku.php?id=<?php echo $d['KodeReferensi']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>