<?php
    session_start();
 //   include('templates/head.php');
 //   include('templates/nav.php');
	$username = $_POST["username"];
	$passwd = $_POST["passwd"];
	$success = 0;

	include_once('connect.php');
	$conn = connect_db();

	$sql = "SELECT username, hash, is_admin FROM User";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			if ($row["username"] == $username && $row["hash"] == $passwd)
			{
				$_SESSION["passwd"] = $passwd;
				$_SESSION["username"] = $username;
				$_SESSION["logged_in"] = TRUE;
				$_SESSION["admin"] = $row["is_admin"];
				$success = 1;
			}
		}		
	}
/*	if ($success)
	{
		echo "successfully logged in";
		echo "<a href='index.php'>back</a>";
	}
	else
	{
		echo "incorrect username or password";
		echo "GTFO ya bish";
		echo "<a href='index.php'>Back</a>";
		echo "<a href='login.php'>Try Again</a>";
	}*/
	mysqli_close($conn);
	header("Location: index.php");
	die();
	//include("footer");
?>