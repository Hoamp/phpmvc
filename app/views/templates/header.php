<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<!-- Start Navbar ( Navigasi ) -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container m-0">
        <a href="<?= BASEURL; ?>" class="navbar-brand fs-3 mx-4">PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" ></button>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a href="<?= BASEURL; ?>" class="nav-items nav-link active fs-4">Home</a>
                <a href="<?= BASEURL; ?>/about" class="nav-items nav-link fs-4">About</a>
                <a href="<?= BASEURL; ?>/murid" class="nav-items nav-link fs-4">Murid</a>
            </div>
        </div>
    </div>

</nav>