<?php 
	session_start();
	if (!isset($_SESSION["logged_in"]))
		$_SESSION["logged_in"] = FALSE;
	if (!isset($_SESSION["admin"]))
		$_SESSION["admin"] = FALSE;
	if (!isset($_SESSION["cart"]))
		$_SESSION["cart"] = array();
	include('templates/head.php');
	include('templates/nav.php');
?>

<h2> the place for hats, cats and socks </h2>

<div class='home-wrapper'>
<div class='box'>
	<a href='cats.php'>
	<img class='box-img'  src='data:image/jpeg;base64,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'>
	</a>
</div>
<div class='box'>
	<a href='hats.php'>
	<img class='box-img' src='data:image/jpeg;base64,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'>
	</a>
</div>
<div class='box'>
	<a href='socks.php'>
	<img class='box-img' src='https://www.featsockco.com/wp-content/uploads/2018/04/Hang-ten3-01.jpg'>
	</a>
</div>
</div>

<?php include('templates/footer.php'); ?>