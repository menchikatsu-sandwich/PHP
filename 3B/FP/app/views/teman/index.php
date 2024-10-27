<div class="container mt-5">
    <div class="row">
        <h3 class="display-6">DAFTAR Teman</h3>

        <?php foreach( $data['tmn'] as $tmn) : ?>
            <div class="card mb-4" style="max-width: 540px; margin-left: 10px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= BASEURL; ?>/img/<?= $tmn['foto'];?>" class="img-fluid rounded-start" alt="Gambar Teman">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $tmn['nama']; ?></h5>
                            <p class="card-text">Umur: <?= $tmn['umur']; ?></p>
                            <p class="card-text">Jenis Kelamin: <?= $tmn['jenis_kelamin']; ?></p>
                            <p class="card-text">Email: <?= $tmn['email']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        
        <form action="<?= BASEURL; ?>/teman/tambah" method="post" enctype="multipart/form-data">
            <input type="text" name="nama" placeholder="Nama Teman" required>
            <input type="number" name="umur" placeholder="Umur" required>
            <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="file" name="foto" required>
            <button type="submit">Tambah Teman</button>
        </form>
    </div>
</div>
