<?php
    session_start();
    include('templates/head.php');
    include('templates/nav.php');
    include_once('get_prodinfo.php');
    if ($_SESSION["logged_in"])
    {
        echo "Current Basket:<br>";
        $accum_price = 0;
        //print_r($_SESSION["cart"]);
        echo "<div class='form-box'>";
        echo "<form action='./validate_order.php' method='POST'>";
        foreach ($_SESSION["cart"] as $item_ref=>$quant)
        {
            $item_info = get_prodinfo($item_ref);
            echo $item_info["prod_name"]."<input type='number' name='$item_ref' value=$quant required/>";
            echo "@ R" . $item_info["price"] . " each";
            echo "<br>";
            $accum_price += $item_info["price"] * $quant;
        }
        echo "<input type='submit' value='OK' />";
        echo "</form>";
        echo "</div>";
        echo "TOTAL PRICE: $accum_price";
        echo "<br>";
        echo "<a href='empty_basket.php'>Empty Basket</a>";
    } else {
        echo "Log in to checkout cart";
    }
?>

<?php include('templates/footer.php');?>