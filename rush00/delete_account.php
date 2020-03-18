<?php
    session_start();
    include_once('connect.php');
	$conn = connect_db();
    $sql = "DELETE FROM User WHERE username="."'".$_SESSION["username"]."'";
    if (mysqli_query($conn, $sql))
    {
        session_destroy();
        $_SESSION["logged_in"] = FALSE;
        $_SESSION["admin"] = FALSE;
        $_SESSION["cart"] = array();
        header("Location: index.php");
        die();
    }
?>