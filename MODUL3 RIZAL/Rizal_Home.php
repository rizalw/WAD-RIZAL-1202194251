<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .kosong{
            margin-top:100px;
            border-bottom:2px solid black;
        }
    </style>
</head>
<body>
    <?php 
        include("Rizal_Connection.php")
    ?>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-dark bg-dark sticky-top" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="http://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" alt="" width="100" class="d-inline-block align-text-top">
                </a>
                <div class="navbar-nav ms-auto">
                    <div class="nav-item">
                        <a href="Rizal_AddBuku.php" class="nav-link">
                            <button class="btn btn-primary">Tambah Buku</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <?php 
            $query = mysqli_query($koneksi, "SELECT * from buku_table");  
            $rowcount=mysqli_num_rows($query);
        ?>
        <?php if ($rowcount == 0): ?>
            <div class="display-6 text-center kosong p-5">Belum Ada Buku</div>
            <p class="fs-5 mt-5 text-center">Silahkan Menambahkan Buku</p>
        <?php else: ?>
            <div class="d-flex justify-content-evenly my-5">
            <?php 
			    while($data = mysqli_fetch_array($query)){    
            ?>
            <div class="card" style="width: 18rem;">
                <img src="gambar/<?php echo $data['gambar'] ?>" class="card-img-top" width="500">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['judul_buku'] ?></h5>
                    <p class="card-text"><?php echo $data['deskripsi'] ?></p>
                    <a href="Rizal_DetailBuku.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
                </div>
            </div>
            <?php 
                } 
            ?>
            </div>
        <?php endif; ?>
    </main>
    <!-- Footer -->
    <footer class="sticky-bottom d-flex flex-column bg-light py-3 mt-5">
        <img src="http://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" alt="" width="100" class="d-inline-block align-text-top mx-auto">
        <div class="fs-5 text-center mt-2"><b>Perpustakaan EAD</b></div>
        <div class="text-center">
            Rizal_1202194251
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>