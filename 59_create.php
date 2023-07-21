<?php require_once '58_connection.php'?>

<?php

$error = [];
$success = [];

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(empty($email))$error[] = 'email is required';    
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))$error[] = 'invalid email';
    if(empty($password))$error[] = 'password is required';
    elseif(strlen($password) < 5)$error[] = 'password need 5 characters minimum';
    
    if(empty($error)){
        $create = "INSERT INTO users(email,password) VALUES('$email','$password')";
        $result = mysqli_query($connection,$create);
        
        if($result){
            $success[] = 'inserted successfully';
            header('location:59_create.php');
        }else{
            die(mysqli_error($connection));
        }
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

<form action="59_create.php" method="post">
    <input type="text" name="email" placeholder="enter email" autocomplete="off">
    <br>
    <input type="password" name="password" placeholder="enter password" autocomplete="off">
    <br>
    <input type="submit" name="submit">
</form>