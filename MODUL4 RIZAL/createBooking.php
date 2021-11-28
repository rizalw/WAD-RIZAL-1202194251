<?php
session_start();
require("Connection.php");
if (isset($_POST['submit'])) {
    $tanggal = $_POST['tanggal'];
    $id = $_GET['id'];
    if ($id == "1") {
        $nama_tempat = "New York";
        $lokasi = "Amerika Serikat";
        $harga = 10000000;
        $tanggal = $tanggal;
    } elseif($id == "2") {
        $nama_tempat = "Dubai";
        $lokasi = "Uni Emirate Arab";
        $harga = 5000000;
        $tanggal = $tanggal;
    } elseif($id == "3") {
        $nama_tempat = "London";
        $lokasi = "Inggris";
        $harga = 8000000;
        $tanggal = $tanggal;
    };
    $tanggal = date("Y-m-d", strtotime($tanggal));
    // Ambil user_id
    $email = $_SESSION['email'];
    // The real query
    $query = "INSERT INTO bookings(user_id, nama_tempat, lokasi, harga, tanggal) 
                VALUES((SELECT id from users WHERE email='$email'),'$nama_tempat', '$lokasi', $harga, '$tanggal')";
    $status = mysqli_query($koneksi, $query);
    if ($status) {
        $_SESSION["is_pesan"] = "true";
        header("Location: index.php");
    } else {
        echo mysqli_error($koneksi);
    };
}
