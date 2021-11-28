<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a.navbar-brand {
            color: black;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION["nama"])) {
        $email = $_SESSION["email"];
        $password = $_SESSION["password"];
    }
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: <?php echo (isset($_COOKIE['warna'])? substr($_COOKIE['warna'], 3, 7): '#88c8f7')?>;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php">EAD Travel</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="registrasi.php">Registrasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if (isset($_SESSION["gagal"])) {
        echo "<div class='alert alert-danger d-flex justify-content-between' role='alert'>
        Gagal login
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        unset($_SESSION['gagal']);
    }
    if (isset($_SESSION["logout"])) {
        echo "<div class='alert alert-success d-flex justify-content-between' role='alert'>
        Berhasil Logout
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        unset($_SESSION['logout']);
    }
    ?>
    <main class="container">
        <div class="card mx-auto w-50 mt-5">
            <div class="card-body">
                <h4 class="card-title text-center">Login</h4>
                <hr>
                <form action="loginQuery.php" method="post">
                    <label for="" class="form-text">Email</label>
                    <input type="text" name="email" id="" class="form-control" value="<?php echo (isset($_COOKIE["remember"])) ? $email : ''; ?>" placeholder="Masukkan Alamat E-Mail">
                    <label for="" class="form-text">Kata Sandi</label>
                    <input type="password" name="password" id="" class="form-control" value="<?php echo (isset($_COOKIE["remember"])) ? $password : ''; ?>" placeholder="Kata Sandi Anda">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="status[]" value="true" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember Me
                        </label>
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn btn-primary form-control w-25 mt-3 mx-auto d-block">
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