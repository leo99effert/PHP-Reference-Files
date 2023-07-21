<?php

if(isset($_GET['submit'])){
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo $email,$password;
    
    echo $_GET['id'];
}

?>

<a href="55_recieve.php?id=4">id</a>

<form action="54_get.php" method="get">
    <input type="text" name="email" placeholder="enter email" autocomplete="off">
    <br>
    <input type="password" name="password" placeholder="enter password" autocomplete="off">
    <br>
    <input type="submit" name="submit">
</form>