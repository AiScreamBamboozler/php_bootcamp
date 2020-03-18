<?php
    session_start();
	$userame = $_POST["username"];
    $passwd = $_POST["passwd"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    
    $_SESSION["passwd"] = $passwd;
    $_SESSION["username"] = $userame;
    $_SESSION["logged_in"] = TRUE;
    
	include_once('connect.php');
	$conn = connect_db();

    $sql = "INSERT INTO User (firstname, lastname, email, hash, username)
    VALUES ('$name', '$surname', '$email', '$passwd', '$userame')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: index.php");
    die();
?>