<div class="container mt-5">
    <div class="text-center">
        <h1>Hi, I'm <?= $data['nama'] ?> 👋</h1>
        <img src="<?= BASEURL;?>/img/sans.jpg" alt="Foto <?= $data['nama'] ?>" width="200" class="img-thumbnail shadow-lg mt-3 mb-3">
        <p class="lead">
            Saya <strong><?= $data['nama'];?></strong> seorang <strong><?=$data['pekerjaan'];?></strong> dan sedang mencari inspirasi serta pengalaman.
        </p>
        <p>
            Asal saya dari Malang, Saya sekarang tinggal di Bali. Saya seorang mahasiswa di Politeknik Nageri Bali.
        </p>
    </div>
    
    <div class="text-center mt-4">
        <h2>Skills</h2>
        <div class="d-flex justify-content-center flex-wrap gap-2">
            <span class="badge bg-success fs-6 p-2">HTML, CSS, JavaScript</span>
            <span class="badge bg-info fs-6 p-2">PHP</span>
            <span class="badge bg-warning fs-6 p-2 text-dark">UI/UX</span>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="https://github.com/menchikatsu-sandwich" class="btn btn-outline-success m-2">Lihat Proyek Saya</a>
        <a href="https://sans0911.carrd.co/" class="btn btn-outline-primary m-2">Hubungi Saya</a>
    </div>
</div>
