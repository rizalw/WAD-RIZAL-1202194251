<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a.navbar-brand {
            color: black;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: <?php echo (isset($['warna'])? substr($_COOKIE['warna'], 3, 7): '#88c8f7')?>;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php">EAD Travel</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="registrasi.php">Registrasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="card mx-auto w-50 mt-5">
            <div class="card-body">
                <h4 class="card-title text-center">Register</h4>
                <hr>
                <form action="registerQuery.php" method="post">
                    <label for="" class="form-text">Nama</label>
                    <input type="text" name="nama" id="" class="form-control" placeholder="Masukkan Nama Lengkap">
                    <label for="" class="form-text">Email</label>
                    <input type="text" name="email" id="" class="form-control" placeholder="Masukkan Alamat E-Mail">
                    <label for="" class="form-text">Nomor Handphone</label>
                    <input type="text" name="nomor_hp" id="" class="form-control" placeholder="Masukkan Nomor Handphone">
                    <label for="" class="form-text">Kata Sandi</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="Kata Sandi Anda">
                    <label for="" class="form-text">Konfirmasi Kata Sandi</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="Konfirmasi Kata Sandi Anda">
                    <input type="submit" name="submit" value="Daftar" class="btn btn-primary form-control w-25 mt-3 mx-auto d-block">
                    <p class="text-center mt-3">Anda sudah punya akun? <a href="login.php">Login</a></p>
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