<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $data['judul'] ?></title>

    <link href="<?= BASEURL ?>\css/bootstrap.css" rel="stylesheet">
    <link href="<?= BASEURL ?>\css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= BASEURL ?>\css\style-adm.css" rel="stylesheet">

</head>

<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>/dashboard">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL ?>/dashboard/orders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL ?>/dashboard/tamu">Buku Tamu</a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link btn btn-danger" href="" type="submit" name="logout">Logout</a>
        </li>
      </ul>
    </div>
    <div class="d-none d-lg-block justify-content-end">
      <a href="" class="btn btn-danger" type="submit" name="logout">Logout</a>
    </div>
  </div>
</nav>
<!-- Navbar End -->