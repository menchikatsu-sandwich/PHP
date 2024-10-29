<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page with Background</title>
    <!-- Bootstrap CSS -->
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?= BASEURL;?>/css/home.css" rel="stylesheet">
    <style>
        .bg-image {
            background-image: url('<?= BASEURL; ?>/img/welcome.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .full-height {
            height: 100vh;
        }
        .btn-get-started {
            background-color: #4CAF50;
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
        }
        .btn-get-started:hover {
            background-color: #45a049;
        }
    </style>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
          <a class="navbar-brand ms-4" href="#">SANS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="<?=BASEURL;?>/home">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?=BASEURL;?>/about">About</a>
                  </li>
                  <li class="nav-item me-4">
                      <a class="nav-link" href="<?=BASEURL;?>/teman">Teman</a>
                  </li>
              </ul>
          </div>
  </nav>