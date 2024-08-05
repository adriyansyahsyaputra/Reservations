<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>

    <link href="<?= BASEURL ?>\css/bootstrap.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">GoTravels</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL ?>/product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL ?>/galery">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL ?>/pesanan">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL ?>/contact">Contact</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a href="" class="nav-link btn btn-success me-2" type="submit" name="logout">Login</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a href="" class="nav-link btn btn-primary" type="submit" name="logout">Register</a>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block justify-content-end">
                <a href="" class="btn btn-success me-2" type="submit" name="logout">Login</a>
                <a href="" class="btn btn-primary" type="submit" name="logout">Register</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->