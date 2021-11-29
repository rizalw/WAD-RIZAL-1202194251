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
    <?php
    require("navbar_login.php");
    if (isset(N["is_hapus"])) {
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