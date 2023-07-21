<?php

$connection = mysqli_connect('localhost','root','','crud');

if(!$connection){
    die(mysqli_error($connection));
}