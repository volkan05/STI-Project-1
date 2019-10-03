<?php
    session_start();
    unset($_SESSION["id_login"]);
    session_destroy();
    header("Location:login.php");
?>