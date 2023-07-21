<?php

$error = [];

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(empty($email))$error[] = 'email is required';    
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))$error[] = 'invalid email';
    if(empty($password))$error[] = 'password is required';
    elseif(strlen($password) < 5)$error[] = 'password need 5 characters minimum';
    
    if(empty($error)) echo $email,$password;
}

?>

<small style="color:red">
    <?php
    foreach($error as $e){
        echo $e.'<br>';
    }
    ?>
</small>

<form action="57_validation.php" method="post">
    <input type="text" name="email" placeholder="enter email" autocomplete="off">
    <br>
    <input type="password" name="password" placeholder="enter password" autocomplete="off">
    <br>
    <input type="submit" name="submit">
</form>