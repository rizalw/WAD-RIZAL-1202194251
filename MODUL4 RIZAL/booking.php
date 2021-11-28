<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
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
    if (isset($_SESSION["is_hapus"])) {
        echo "<div class='alert alert-success d-flex justify-content-between' role='alert'>
        Berhasil dihapus!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        unset($_SESSION['is_hapus']);
    }
    ?>
    <main class="container">
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Tempat</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Tanggal Perjalanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("Connection.php");
                $query = "SELECT * FROM bookings;";
                $result = mysqli_query($koneksi, $query);
                if ($result) {
                    $angka = 1;
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $angka ?></th>
                            <td><?php echo $data["nama_tempat"] ?></td>
                            <td><?php echo $data["lokasi"] ?></td>
                            <td><?php echo $data["tanggal"] ?></td>
                            <td>Rp. <?php echo $data["harga"] ?></td>
                            <td>
                                <form action="deleteBooking.php" method="post">
                                    <input type="number" value="<?php echo $data["id"] ?>" name="id" hidden>
                                    <input type="submit" class="btn btn-danger" value="Hapus" name="hapus">
                                </form>
                            </td>
                        </tr>
                <?php
                        $angka++;
                    };
                };
                $query_sum = "SELECT SUM(harga) as total FROM bookings;";
                $result = mysqli_query($koneksi, $query_sum);
                $hasil_sum = mysqli_fetch_assoc($result);
                ?>
                <tr>
                    <th colspan="4">Total</th>
                    <th>Rp. <?php echo $hasil_sum["total"] ?></th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </main>
    <?php
    require("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>