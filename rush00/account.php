<?php
    session_start();
    include('templates/head.php');
    include('templates/nav.php');

    echo "Hi ".$_SESSION["username"];
    echo "<br>";
    echo "<a href='update_info.php'>Update Info</a>";
    echo "<br>";
    echo "<a href='delete_account.php'>Delete Account</a>";
?>
