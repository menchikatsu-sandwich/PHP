<h2>Available Cameras</h2>

<?php foreach ($data['cameras'] as $camera): ?>
    <div>
        <h3><?= $camera['name'] ?></h3>
        <p><?= $camera['details'] ?></p>
        <p>Stock: <?= $camera['stock'] ?></p>
        <a href="<?= BASEURL ?>/Chat/openChat/<?= $camera['id'] ?>">Rent</a>
    </div>
<?php endforeach; ?>