<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email,$password;
}

?>

<form action="56_post.php" method="post">
    <input type="text" name="email" placeholder="enter email" autocomplete="off">
    <br>
    <input type="password" name="password" placeholder="enter password" autocomplete="off">
    <br>
    <input type="submit" name="submit">
</form>