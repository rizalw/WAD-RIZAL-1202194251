<?php 
session_start();
require("connection.php");
if (isset($_POST["hapus"])){
    $id = $_POST['id'];
    $ya = mysqli_query($koneksi, " DELETE FROM bookings WHERE id = $id");
    if ($ya){
        $_SESSION["is_hapus"] = "true";
        header("Location: booking.php");
    }
}
?>