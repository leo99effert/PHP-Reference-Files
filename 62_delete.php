<?php require_once '58_connection.php'?>

<?php

$error = [];
$success = [];

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(empty($email))$error[] = 'email is required';    
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))$error[] = 'invalid email';
    if(empty($password))$error[] = 'password is required';
    elseif(strlen($password) < 5)$error[] = 'password need 5 characters minimum';
    
    if(empty($error)){
        $delete = "DELETE FROM users WHERE id=$id";
        $result = mysqli_query($connection,$delete);
        
        if($result){
            $success[] = 'deleted successfully';
            header('location:60_read.php');
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

<form action="62_delete.php" method="post">
    <input type="text" name="id" value="<?= $_GET['id'] ?>">
    <br>
    <?php 
    $read = "SELECT * FROM users WHERE id={$_GET['id']}";
    $result = mysqli_query($connection,$read);
    $row = mysqli_fetch_assoc($result);
    ?>
    <input type="text" name="email" placeholder="enter email" autocomplete="off" value="<?= $row['email'] ?>">
    <br>
    <input type="password" name="password" placeholder="enter password" autocomplete="off" value="<?= $row['password'] ?>">
    <br>
    <input type="submit" name="submit">
</form>