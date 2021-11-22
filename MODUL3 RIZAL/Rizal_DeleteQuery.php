<?php
    include("Rizal_Connection.php");
    if (isset($_POST["hapus"])){
        $id_buku = $_POST['id_buku'];
        $ya = mysqli_query($koneksi, " id_buku = $id_buku");
        header("Location: Rizal_Home.php");
    }
?>