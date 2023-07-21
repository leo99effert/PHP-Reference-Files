<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    $_SESSION['id'] = 50; 
    $_SESSION['user'] = 'admin';
    ?>
</body>
</html>