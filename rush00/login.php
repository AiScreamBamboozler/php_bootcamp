<?php
    session_start();
    include('templates/head.php');
    include('templates/nav.php');
?>
<div class='form-box'>
<form action="./validate_login.php" method="POST">
    Username: <input type="text" name="username" value="" required/>
    Password: <input type="password" name="passwd" value="" required/>
    <input type="submit" value="OK" />
</form>
</div>
<?php include('templates/footer.php');?>