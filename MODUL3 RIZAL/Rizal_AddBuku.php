<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
        include("Rizal_Connection.php")
    ?>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-dark bg-dark sticky-top" >
            <div class="container-fluid">
                <a class="navbar-brand" href="Rizal_Home.php">
                    <img src="http://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" alt="" width="100" class="d-inline-block align-text-top">
                </a>
                <div class="navbar-nav ms-auto">
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <button class="btn btn-primary">Tambah Buku</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container shadow d-flex flex-column p-5 mt-5">
        <div class="display-6 text-center"><b>Tambah Data Buku</b></div>
        <div class="container">
            <form method="POST" action="Rizal_AddBukuQuery.php" enctype="multipart/form-data">
                <label for="" class="form-text"><b>Judul Buku</b></label>
                <input type="text" class="form-control" placeholder="Contoh: Pemrograman Web Bersama EAD" name="judul">
                <label for="" class="form-text mt-2"><b>Penulis</b></label>
                <input type="text" class="form-control" value="Rizal_1202194251" name="nama" readonly="true">
                <label for="" class="form-text mt-2"><b>Tahun Terbit</b></label>
                <input type="number" class="form-control" name="tahun">
                <label for="" class="form-text mt-2"><b>Deskripsi</b></label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control" placeholder="Contoh: Buku ini menjelaskan tentang ..."></textarea>
                <div class="bahasa-input d-flex align-items-stretch mt-2">
                    <label for="" class="form-text"><b>Bahasa</b></label>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="bahasa" id="flexRadioDefault1" value="Indonesia">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Indonesia
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="bahasa" id="flexRadioDefault2" value="Lainnya">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Lainnya
                        </label>
                    </div>
                </div>
                <div class="d-flex mt-2">
                    <label for="" class="form-text"><b>Tag</b></label>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Pemrograman" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Pemrograman
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Website" id="flexCheck1">
                        <label class="form-check-label" for="flexCheckChecked">
                            Website
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Java" id="flexCheck2">
                        <label class="form-check-label" for="flexCheckChecked">
                            Java
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="OOP" id="flexCheck3">
                        <label class="form-check-label" for="flexCheckChecked">
                            OOP
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="MVC" id="flexCheck4">
                        <label class="form-check-label" for="flexCheckChecked">
                            MVC
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Kalkulus" id="flexCheck5">
                        <label class="form-check-label" for="flexCheckChecked">
                            Kalkulus
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Lainnya" id="flexCheck6">
                        <label class="form-check-label" for="flexCheckChecked">
                            Lainnya
                        </label>
                    </div>
                </div>
                <label for="formFile" class="form-label mt-2"><b>Gambar</b></label>
                <input class="form-control" type="file" id="formFile" name="foto">
                <input type="submit" name="submit" value="+ TAMBAH" class="btn btn-primary mt-4 d-block mx-auto w-50">
            </form>
        </div>
    </main>
    <footer class="sticky-bottom d-flex flex-column bg-light py-3">
        <img src="http://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png" alt="" width="100" class="d-inline-block align-text-top mx-auto">
        <div class="fs-5 text-center mt-2"><b>Perpustakaan EAD</b></div>
        <div class="text-center">
            Rizal_1202194251
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>