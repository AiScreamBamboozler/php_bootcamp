<?php
    session_start();
    include('templates/head.php');
    include('templates/nav.php');

    include_once('connect.php');
    $conn = connect_db();
    $sql = "SELECT firstname, lastname, email FROM User
            WHERE username='" . $_SESSION["username"] . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<div class='form-box'>
<form action="./validate_update.php" method="POST">
    Name: <input type="text" name="name" value="<?php echo $row["firstname"]; ?>" required/>
    Surname: <input type="text" name="surname" value="<?php echo $row["lastname"]; ?>" required/>
    Eamil: <input type="email" name="email" value="<?php echo $row["email"]; ?>" required/>
    Password: <input type="password" name="passwd" value="<?php echo $_SESSION["passwd"]; ?>" required/>
    <input type="submit" value="OK" />
</form>
</div>
<?php include('templates/footer.php'); ?>

