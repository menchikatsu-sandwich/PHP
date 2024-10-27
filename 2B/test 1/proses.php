 <!-- nama -->
        <?php echo "Nama: " . $_POST['nama']; ?><br>
        <!-- kelamin -->
        <?php
        $kelamin = $_POST['kelamin'];
        echo "Jenis Kelamin:: <b>".$kelamin."</b>";
        ?>
        <br>
        <!-- status -->
        <?php
        $pegawai = $_POST['pegawai'];
        echo "Status Pegawai : <b>".$pegawai."</b>";
        ?>
        <br>
        <!-- lembur -->
        <?php
        $lembur = $_POST['lembur'];
        $pegawai = $_POST['pegawai'];

        $UL = 0;
        $TUL = 0;

        switch ($pegawai) {
            case 'Pegawai ASN':
                $UL = 20000;
                $TUL = $lembur * 20000;
                break;
            case 'Pegawai P3K':
                $UL = 15000;
                $TUL = $lembur * 15000;
                break;
            case 'Dosen ASN':
                $UL = 40000;
                $TUL = $lembur * 40000;
                break;
            case 'Dosen P3K':
                $UL = 35000;
                $TUL = $lembur * 35000;
                break;
        }

        $ULem = $UL;
        $TULem = $TUL;

        echo "Jam Lembur : $lembur <br>";
        echo "Lembur Per Jam : $ULem <br>";
        echo "Total Uang Lembur : Rp. $TULem <br>";
        ?>