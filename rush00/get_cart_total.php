<?php

function get_cart_total($cart) {
    $accum_price = 0;
    foreach ($cart as $item_ref=>$quant)
    {
        $item_info = get_prodinfo($item_ref);
        $accum_price += $item_info["price"] * $quant;
    }
    return($accum_price);
}
?>