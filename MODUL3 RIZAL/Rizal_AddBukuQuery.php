<?php
    include("Rizal_Connection.php");
    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $nama = $_POST['nama'];
        $tahun = $_POST['tahun'];
        $deskripsi = $_POST['deskripsi'];
        $bahasa = $_POST['bahasa'];
        $tag = implode(", ", $_POST['tag']);
        $filename = $_FILES['foto']['name'];
        $rand = rand();
        $file = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
        mysqli_query($koneksi, "INSERT INTO buku_table(judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES('$judul','$nama', '$tahun', '$deskripsi', '$file', '$tag', '$bahasa')");
        header("Location: Rizal_Home.php");
    }
?>