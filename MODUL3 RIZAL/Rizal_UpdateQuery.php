<?php
    include("Rizal_Connection.php");
    if (isset($_POST["ubah"])) {
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $nama = $_POST['nama'];
        $tahun = $_POST['tahun'];
        $deskripsi = $_POST['deskripsi'];
        $bahasa = $_POST['bahasa'];
        mysqli_query($koneksi, "UPDATE buku_table SET 
            judul_buku = $judul,
            penulis_buku = $nama,
            tahun_terbit = $tahun,
            deskripsi = $deskripsi,
            bahasa = $bahasa
            WHERE id_buku = $id_buku;");
        header("Location: Rizal_Home.php");
    };
?>