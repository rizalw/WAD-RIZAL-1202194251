<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: <?php echo (isset($_COOKIE['warna']) ? substr($_COOKIE['warna'], 3, 7) : '#88c8f7') ?>;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php">EAD Travel</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <!-- Ketika belum login -->
                        <?php if (!isset($_SESSION["login"])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="registrasi.php">Registrasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <!-- Ketika udah login -->
                        <?php elseif (isset($_SESSION["login"])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="booking.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    echo $_SESSION["nama"]
                                    ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="logoutQuery.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if (isset($_SESSION["berhasil"])) {
        echo "<div class='alert alert-success d-flex justify-content-between' role='alert'>
        Berhasil Login
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        unset($_SESSION['berhasil']);
    }
    if (isset($_SESSION["is_pesan"])) {
        echo "<div class='alert alert-success d-flex justify-content-between' role='alert'>
        Berhasil memesan tiket
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        unset($_SESSION['is_pesan']);
    }
    ?>
    <main class="container mb-5">
        <div class="gede py-4 mt-5 text-center fs-2" style="background-color: <?php echo (isset($_COOKIE['warna']) ? substr($_COOKIE['warna'], 3, 7) : '#88c8f7') ?>;"><b>EAD Travel</b></div>
        <div class="row mt-3">
            <div class="col card" style="width: 18rem;">
                <img src="static/amerika.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">New York, Amerika Serikat</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum facilis optio culpa aperiam dolor modi quis amet temporibus, atque similique voluptas quos iste, reprehenderit velit doloribus iure ratione sit! Eaque?<br>
                    <h6>Rp.10.000.000</h6></p>
                    
                    <a href="javascript:void()" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modal_pesan1">Pesan Tiket</a>
                </div>
            </div>
            <div class="col card" style="width: 18rem;">
                <img src="static/dubai.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dubai, Uni Emirate Arab</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum facilis optio culpa aperiam dolor modi quis amet temporibus, atque similique voluptas quos iste, reprehenderit velit doloribus iure ratione sit! Eaque?<br>
                    <h6>Rp.5.000.000</h6></p>
                    <a href="javascript:void()" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modal_pesan2">Pesan Tiket</a>
                </div>
            </div>
            <div class="col card" style="width: 18rem;">
                <img src="static/london.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">London, Inggris</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum facilis optio culpa aperiam dolor modi quis amet temporibus, atque similique voluptas quos iste, reprehenderit velit doloribus iure ratione sit! Eaque?<br>
                    <h6>Rp.8.000.000</h6></p>
                    <a href="javascript:void()" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modal_pesan3">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </main>
    <!-- Modal Buat Masukkin tanggal -->
    <!-- Modal 1 -->
    <div class="modal fade" id="modal_pesan1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="createBooking.php?id=1" method="post">
                    <div class="modal-body">
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal 2 -->
    <div class="modal fade" id="modal_pesan2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="createBooking.php?id=2" method="post">
                    <div class="modal-body">
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal 3 -->
    <div class="modal fade" id="modal_pesan3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="createBooking.php?id=3" method="post">
                    <div class="modal-body">
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    require("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>