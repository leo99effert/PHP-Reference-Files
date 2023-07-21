<?php require_once '58_connection.php'?>

<?php

$error = [];
$success = [];

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //if(empty($email))$error[] = 'email is required';    
    //elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))$error[] = 'invalid email';
    if(empty($password))$error[] = 'password is required';
    elseif(strlen($password) < 5)$error[] = 'password need 5 characters minimum';
    
    // encryption
    $hashFormat = '$2y$';
    $costParameter = '07';
    $dollarSign = '$';
    $salt = 'somesillystringforsalt';
    $blowfish = $hashFormat.$costParameter.$dollarSign.$salt;
    $password = crypt($password,$blowfish);
    
    $email = mysqli_real_escape_string($connection,$email);
    $password = mysqli_real_escape_string($connection,$password);

    if(empty($error)){
      
      // '; Truncate TABLE users -- 
      $sql = "SELECT * FROM users WHERE email='$email'";
      mysqli_multi_query($connection,$sql);
    }
}

?>

<small style="color:red">
    <?php
    foreach($error as $e){
        echo $e.'<br>';
    }
    ?>
</small>

<small style="color:lime">
    <?php
    foreach($success as $s){
        echo $s.'<br>';
    }
    ?>
</small>

<form action="65_sqlinjection.php" method="post">
    <input type="text" name="email" placeholder="enter email" autocomplete="off">
    <br>
    <input type="password" name="password" placeholder="enter password" autocomplete="off">
    <br>
    <input type="submit" name="submit">
</form>