<?php
    session_start();
    $cart = "";
    foreach ($_POST as $key=>$val)
    {
        $cart .= "$key=>$val,";
    }
    $user = $_SESSION["username"];
	include_once('connect.php');
	$conn = connect_db();
    $sql = "INSERT INTO Orders (user, cart)
            VALUES ('$user', '$cart')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    include("empty_basket.php");
?>