<div class="container mt-5">
    <div class="row">
        <h3 class="display-6">DAFTAR MAHASISWA</h3>

        <?php foreach( $data['mhs'] as $mhs) : ?>
            <ul>
                <li><?= $mhs['nama']; ?></li>
                <li><?= $mhs['nim']; ?></li>
                <li><?= $mhs['jurusan']; ?></li>
            </ul>
        <?php endforeach ?>
    </div>
</div>