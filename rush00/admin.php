<?php
    session_start();
    if ($_SESSION["admin"])
    {
        header("Location: http://127.0.0.1:8080/phpmyadmin/");
        die();
    }
?>