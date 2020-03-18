<?php
    session_start();
    session_destroy();
    $_SESSION["logged_in"] = FALSE;
    $_SESSION["admin"] = FALSE;
    $_SESSION["cart"] = array();
    header("Location: index.php");
    die();
?>
