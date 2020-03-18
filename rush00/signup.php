<?php
    session_start();
    include('templates/head.php');
    include('templates/nav.php');
?>
<div class="form-box">
<form action="./validate_signup.php" method="POST">
    Name: <input type="text" name="name" value="" required/>
    Surname: <input type="text" name="surname" value="" required/>
    Eamil: <input type="email" name="email" value="" required/>
    Username: <input type="text" name="username" value="" required/>
    Password: <input type="password" name="passwd" value="" required/>
    <input type="submit" value="OK" />
</form>
</div>
<?php include('templates/footer.php'); ?>