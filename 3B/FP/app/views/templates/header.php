<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul'];?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
          background: linear-gradient(to bottom, #1E3C72, #2A5298);
          color: #ffffff;
          text-align: center;
      }
      .welcome-section {
          padding: 100px 20px;
      }
      .navbar-nav .nav-link.active {
          background-color: rgba(255, 255, 255, 0.2);
          border-radius: 5px;
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

  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="#">SANS</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASEURL;?>/teman">Teman</a>
                </li>
            </ul>
        </div>
    </div>
</nav>