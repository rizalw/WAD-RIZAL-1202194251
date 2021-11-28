<?php
session_start();
if (isset($_POST["submit"])) {
    require("connection.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (isset($_POST["status"])) {
        $status = $_POST["status"];
    }
    $query = "
        SELECT * FROM users where email = '$email' AND password = '$password';
        ";
    $hasil = mysqli_query($koneksi, $query);
    if ($hasil) {
        if (mysqli_num_rows($hasil) == 0) {
            $_SESSION["gagal"] = "Gagal Login";
            header("Location: login.php");
        } elseif (mysqli_num_rows($hasil) == 1) {
            if (isset($_POST["status"]) && in_array("true", $status)) {
                $value = "true";
                setcookie("remember", $value);
                setcookie("remember", $value, time() + 3600);
            }
            $data = mysqli_fetch_assoc($hasil);
            $_SESSION["nama"] = $data["nama"];
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["no_hp"] = $data["no_hp"];
            $_SESSION["berhasil"] = "Berhasil Login";
            $_SESSION["login"] = "true";
            header("Location: index.php");
        };
    } else {
        $_SESSION["gagal"] = "gagal";
        header("Location: login.php");
    };
};
?>