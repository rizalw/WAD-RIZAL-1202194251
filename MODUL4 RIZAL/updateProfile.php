<?php
require("connection.php");
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $password_verify = $_POST['password_verify'];
    $nomor_hp = $_POST['nomor_hp'];
    $warna = $_POST['warna'];
    if ($password == $password_verify) {
        if ($warna == "0") {
            $value = "0, #88c8f7";
        } elseif ($warna == "1") {
            $value = "1, #99ff99";
        } elseif ($warna == "2") {
            $value = "2, #ff99cc";
        };
        $query = "UPDATE users SET
                    nama = '$nama',
                    password = '$password',
                    no_hp = '$nomor_hp'
                    WHERE email = '$email';";
        $hasil = mysqli_query($koneksi, $query);
        if ($hasil) {
            setcookie("warna", $value);
            setcookie("warna", $value, time() + 3600);
            $_SESSION["berhasil"] = "berhasil";
            $_SESSION["nama"] = $nama;
            $_SESSION["password"] = $password;
            $_SESSION["no_hp"] = $nomor_hp;
            header("Location: profile.php");
        } else {
            $_SESSION["error"] = "tidak berhasil";
            header("Location: profile.php");
        }
    } else {
        $_SESSION["gagal"] = "Gagal";
        header("Location: profile.php");
    }
}
