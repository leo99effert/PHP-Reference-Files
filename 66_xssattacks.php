<?php require_once '58_connection.php'?>

<?php

$error = [];
$success = [];

// <script>window.location="http://www.google.com"</script>

if(isset($_POST['submit'])){
    $email = htmlspecialchars($_POST['email']); // turn string to html
    echo $email;
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

<form action="66_xssattacks.php" method="post">
    <input type="text" name="email" placeholder="enter email" autocomplete="off">
    <br>
    <input type="password" name="password" placeholder="enter password" autocomplete="off">
    <br>
    <input type="submit" name="submit">
</form>