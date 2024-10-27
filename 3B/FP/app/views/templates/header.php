<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul'];?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?= BASEURL; ?>/index">SANTO WEBSITE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/teman">Teman</a>
              </li> 
            </ul>
          </div>
        </div>
  </div>
</nav>