<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: <?php echo (isset($_COOKIE['warna'])? substr($_COOKIE['warna'], 3, 7): '#88c8f7')?>;">
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
                                <a class="nav-link" aria-current="page" href="registrasi.php">
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
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if (isset($_SESSION["gagal"])) {
        echo "<div class='alert alert-danger d-flex justify-content-between' role='alert'>
        Password salah / tidak sama
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        unset($_SESSION['gagal']);
    }
    if (isset($_SESSION["error"])) {
        echo "<div class='alert alert-danger d-flex justify-content-between' role='alert'>
        Data tidak bisa diupdate
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION["berhasil"])) {
        echo "<div class='alert alert-success d-flex justify-content-between' role='alert'>
        Data berhasil diupdate
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        unset($_SESSION['berhasil']);
    }
    ?>
    <main class="container mt-5">
        <div class="card shadow w-75 mx-auto">
            <div class="card-body">
                <h5 class="card-title text-center">Profile</h5>
                <form action="updateProfile.php" method="post">
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-text fs-5">Email</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" name="email" value="<?php echo $_SESSION["email"] ?>" readonly="true" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="" class="form-text fs-5">Nama</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION["nama"] ?>" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="" class="form-text fs-5">Nomor Handphone</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" name="nomor_hp" value="<?php echo $_SESSION["no_hp"] ?>" required>
                        </div>
                    </div>
                    <hr class="dropdown-divider mt-3">
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="" class="form-text fs-5">Kata Sandi</label>
                        </div>
                        <div class="col-9">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="" class="form-text fs-5">Konfirmasi Kata Sandi</label>
                        </div>
                        <div class="col-9">
                            <input type="password" class="form-control" name="password_verify" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="" class="form-text fs-5">Warna Navbar</label>
                        </div>
                        <div class="col-9">
                            <?php if (isset($_COOKIE["warna"])) : ?>
                                <?php
                                $warna = $_COOKIE["warna"];
                                $warna = explode(", ", $warna);
                                ?>
                                <select class="form-select" name="warna">
                                    <option Value="0" <?php echo ($warna[0] == 0) ? 'selected' : '' ?>>Biru Langit</option>
                                    <option value="1" <?php echo ($warna[0] == 1) ? 'selected' : '' ?>>Hijau Muda</option>
                                    <option value="2" <?php echo ($warna[0] == 2) ? 'selected' : '' ?>>Pink</option>
                                </select>
                            <?php else : ?>
                                <select class="form-select" name="warna">
                                    <option Value="0" selected>Biru Langit</option>
                                    <option value="1">Hijau Muda</option>
                                    <option value="2">Pink</option>
                                </select>

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="submit" value="Simpan" name="submit" class="btn btn-primary ms-auto d-block">
                        </div>
                        <div class="col">
                            <a href="index.php">
                                <input type="Button" value="Cancel" class="btn btn-warning">
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
    require("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>