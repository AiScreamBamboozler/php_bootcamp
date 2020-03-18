<?php

function get_prodinfo($item_ref) {
    include_once('connect.php');
	$conn = connect_db();
    $sql = "SELECT prod_name, prod_desc, categories, img_url, prod_ref, price FROM Products
            WHERE prod_ref='$item_ref'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return ($row);
}
?>