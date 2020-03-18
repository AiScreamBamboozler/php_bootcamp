<?php
    session_start();
    if (isset($_GET["quantity"]) && isset($_GET["ref"]))
    {
        
        if ($_SESSION["cart"][$_GET["ref"]] == NULL)
            $_SESSION["cart"][$_GET["ref"]] = $_GET["quantity"];
        else
            $_SESSION["cart"][$_GET["ref"]] += $_GET["quantity"];
        header("Location: index.php");
        //echo $_GET["quantity"]." item(s) succesfully added to cart";
    }
?>
