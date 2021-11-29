<?php
    session_start();
    unset($_SESSION['login']);
    $_SESSION["logout"] = "true";
    header("Location: login.php");
?>