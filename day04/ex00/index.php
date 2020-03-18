<?php
session_start();
if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] === "OK")
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
	</HEAD>
		<div>
			<H1>Sign Up</H1>
		</div>
	</head>
	<body>
		<div>
			<form action="index.php" method="GET">
					Username: <input type="text" name="login" value="<?php echo ($_SESSION['login']) ?>"/><br />
					Password: <input type="password" name="passwd" value="<?php echo ($_SESSION['passwd']) ?>"/><br />
					<input type="submit" name="submit" value="OK"/>
			</form>
		</div>
	</body>
</html>
