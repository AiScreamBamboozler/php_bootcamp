<div class='nav'>
    <a class='nav_opt' href="index.php"> Home </a>
    <a class='nav_opt' href="browse.php"> Browse </a>
    <a class='nav_opt' href="checkout.php"> Checkout </a>

<?php
    include_once('get_prodinfo.php');
   // include('get_cart_total.php');
   // $total_val = get_cart_total($_SESSION["cart"]);*/
  
    $accum_price = 0;
    $accum_quant = 0;
    foreach ($_SESSION["cart"] as $item_ref=>$quant)
    {
        $item_info = get_prodinfo($item_ref);
        $accum_price += $item_info["price"] * $quant;
        $accum_quant += $quant; 
    }
    $total_val = 100;
    echo "<div id='basket-total'> R". $accum_price ."<br> No. Things:". $accum_quant ."</div>";
    if ($_SESSION["admin"] == TRUE)
        echo "<a class='nav_opt' href='admin.php'>Admin Panle</a>\n";
    if ($_SESSION["logged_in"] == FALSE)
    {
        echo "<a class='nav_opt' href='login.php'>Login</a>\n";
        echo "<a class='nav_opt' href='signup.php'>Sign Up</a>\n";
    }
    else
    {
        echo  "<a class='nav_opt' href='account.php'>Account Settings</a>\n";
        echo  "<a class='nav_opt' href='logout.php'>Logout</a>\n";
    }

?>
</div>