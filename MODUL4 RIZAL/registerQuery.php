<?php
    require("Connection.php");
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nomor_hp = $_POST['nomor_hp'];
        $status = mysqli_query($koneksi, "INSERT INTO users(nama, email, password, no_hp) VALUES('$nama','$email', '$password', '$nomor_hp')");
        if ($status){
            header("Location: login.php");
        } else {
            header("Location: registrasi.php");
        };
    }
?>