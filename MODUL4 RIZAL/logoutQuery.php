<?php
    sessionstart();
    unset($_SESSION['login']);
    $_SESSION["logout"] = "true";
    header("Location: login.php");
?>