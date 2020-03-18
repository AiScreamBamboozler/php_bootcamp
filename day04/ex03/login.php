<?php
include "auth.php";
session_start();
if($_GET['login'] != "" && $_GET['passwd'] != "")
{
	$login = $_GET['login'];
	$pw = $_GET['passwd'];
	if (auth($login, $pw) === TRUE)
	{
		$_SESSION['loggued_on_user'] = $login;
		echo "OK\n";
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo "ERROR\n";
	}
}
?>