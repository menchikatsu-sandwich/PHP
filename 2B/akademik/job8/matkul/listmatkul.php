<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
    <h2>CRUD DATA MATAKULIAH</h2>
    <br/>
    <a href="tambahmatkul.php">+ TAMBAH MATAKULIAH</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>KodeMK</th>
            <th>NamaMK</th>
            <th>JumlahSKS</th>
            <th>Semester</th>
            <th>MKInti</th>
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
            // hitung no agar tdk mulai dari 1 lgi
            $no = ($halaman - 1) * $batas + 1;

        // langkah 2 hitung total data dan halaman, serta link 1,2,3
        $query2 = mysqli_query($koneksi, "select * from matakuliah");
        $jmldata = mysqli_num_rows($query2);
        $jmlhalaman = ceil($jmldata/$batas);

        echo "<br/> Halaman : ";

        for($i=1;$i<=$jmlhalaman;$i++)
        if($i != $halaman){
            echo " <a href=\"listmatkul_page.php?halaman=$i\">$i</a> | ";
        } else {
            echo " <b>$i</b> | ";
        }
        echo "<p>Total Mata Kuliah : <b>$jmldata</b> </p>";
        // Langkah 3 sesuaikan query dgn posisi dan batas
        $query = "select * from matakuliah LIMIT $posisi,$batas";

        $data = mysqli_query($koneksi,$query);
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['KodeMK']; ?></td>
                <td><?php echo $d['NamaMK']; ?></td>
                <td><?php echo $d['JumlahSKS']; ?></td>
                <td><?php echo $d['Semester']; ?></td>
                <td><?php echo $d['MKInti'] == 1 ? 'Ya' : 'Tidak'; ?></td> <!-- if untuk tampilan tabel ya/tidak bukan boolean(1/0) -->
                <td>
                    <a href="editmatkul.php?KodeMK=<?php echo $d['KodeMK']; ?>">EDIT</a>
                    <a href="hapusmatkul.php?KodeMK=<?php echo $d['KodeMK']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>