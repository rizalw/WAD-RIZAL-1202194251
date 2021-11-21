<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .gambar_buku{
            width:400px;
            height:auto;
        };
    </style>
</head>
<body>
    <?php
        include("Rizal_Connection.php");
        $id_buku = $_GET["id"];
        $query = mysqli_query($koneksi, "SELECT * from buku_table WHERE id_buku = $id_buku");
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
                        <a href="Rizal_AddBuku.php" class="nav-link">
                            <button class="btn btn-primary">Tambah Buku</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <main class="container shadow p-5 mt-5">
        <div class="fs-3 text-center"><b>Detail Buku</b></div>
        <?php 
            while($data = mysqli_fetch_array($query)){
        ?>
        <img src="gambar/<?php echo $data['gambar']?>" alt="" class="d-block mx-auto mt-2 mb-5 shadow gambar_buku">
        <hr>
        <div class="d-flex flex-column">
            <b class="mt-2">Judul :</b>
            <?php  echo $data['judul_buku']?>
            <b class="mt-2">Penulis :</b>
            <?php  echo $data['penulis_buku']?>
            <b class="mt-2">Tahun Terbit :</b>
            <?php  echo $data['tahun_terbit']?>
            <b class="mt-2">Deskripsi :</b>
            <?php  echo $data['deskripsi']?>
            <b class="mt-2">Bahasa :</b>
            <?php  echo $data['bahasa']?>
            <b class="mt-2">Tag: </b>
            <?php  echo $data['tag']?>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sunting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="Rizal_UpdateQuery.php">
                        <div class="modal-body d-flex flex-column">
                            <b class="mt-2">Judul Buku</b>
                            <input type="text" class="form-control" value="<?php echo $data['judul_buku']?>" name="judul">
                            <b class="mt-2">Penulis</b>
                            <input type="text" class="form-control" value="<?php echo $data['penulis_buku']?>" name="nama" readonly="true">
                            <b class="mt-2">Tahun Terbit</b>
                            <input type="number" class="form-control" value="<?php echo $data['tahun_terbit']?>" name="tahun">
                            <b class="mt-2">Deskripsi</b>
                            <textarea name="deskripsi" id="" cols="30" rows="2" class="form-control"><?php echo $data['deskripsi']?></textarea>
                            <div class="d-flex mt-2">
                                <b>Bahasa</b>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="radio" name="bahasa" id="flexRadioDefault1" value="Indonesia" <?php echo $data["bahasa"] == "Indonesia"? "checked" : ""; ?>>
                                    <label class="form-check-label" for="flexRadioDefault1">Indonesia</label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="radio" name="bahasa" id="flexRadioDefault2" value="Lainnya" <?php echo $data["bahasa"] == "Lainnya"? "checked" : ""; ?>>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Lainnya
                                    </label>
                                </div>
                            </div>
                            <?php 
                            $tags=explode(', ', $data['tag']);
                            ?>
                            <div class="d-flex flex-wrap mt-2">
                                <b>Tag</b>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Pemrograman" id="flexCheckDefault" <?php if (in_array("Pemrograman", $tags)) echo "checked";?>>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Pemrograman
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Website" id="flexCheck1" <?php if (in_array("Website", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Website
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Java" id="flexCheck2" <?php if (in_array("Java", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Java
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="OOP" id="flexCheck3" <?php if (in_array("OOP", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        OOP
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="MVC" id="flexCheck4" <?php if (in_array("MVC", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        MVC
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Kalkulus" id="flexCheck5" <?php if (in_array("Kalkulus", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Kalkulus
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Lainnya" id="flexCheck6" <?php if (in_array("Lainnya", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Lainnya
                                    </label>
                                </div>
                            </div>
                            <input type="number" name="id_buku" id="id_buku" value="<?php echo $data['id_buku'] ?>" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <input type="submit" class="btn btn-primary" value="Simpan Perubahan" name="ubah">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php 
            };
        ?>
        <div class="row mt-2">
            <div class="col">
                <a href="javascript:void()">
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Sunting</button>
                </a>
            </div>
            <div class="col">
                <form method="post" action="Rizal_DeleteQuery.php">
                    <input type="number" name="id_buku" id="" value="<?php echo $id_buku ?>" hidden>
                    <input class="btn btn-danger w-100"type="submit" value="Hapus" name="hapus">
                </form>
            </div>
        </div>
    </main>
    <!-- Footer -->
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