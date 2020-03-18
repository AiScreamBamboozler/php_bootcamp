<?php
    session_start();
    include('templates/head.php');
    include('templates/nav.php');
    include_once('connect.php');
	$conn = connect_db();
	$sql = "SELECT prod_name, prod_desc, categories, img_url, prod_ref FROM Products";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
            //print_r(explode(",", $row["categories"]));
            if (!in_array("cats", explode(",", $row["categories"])))
                continue;
			echo "<div>";
			echo "<p>Product: " . $row["prod_name"] . "</p>";
			echo "<p>Description: " . $row["prod_desc"]."</p>";
			echo "<img src='" . $row["img_url"] ."' alt='" . $row["prod_ref"] . "'>";
			echo "<form action='./add_to_cart.php' method='GET'>";
			echo "	Quantity <input type='number' name='quantity' value=1 required/>";
			echo "	<input type='submit' value='OK' />";
			echo "	<input type='hidden' name='ref' value=" . $row["prod_ref"] ." required/>";
			echo "</form>";
			echo "</div>";
		}
	}
	mysqli_close($conn);
?>