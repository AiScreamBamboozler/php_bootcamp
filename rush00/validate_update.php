<?php
    session_start();
    $passwd = $_POST["passwd"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    
	include_once('connect.php');
	$conn = connect_db();

    $sql = "UPDATE User 
            SET firstname='$name', lastname='$surname', email='$email', hash='$passwd' 
            WHERE username="."'".$_SESSION["username"]."'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: index.php");
    die();
?>
