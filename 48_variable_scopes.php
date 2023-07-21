<?php

$x = 100; // global
function demo(){
    $x = 10; // local variable
    echo $x.'<br>';
}
demo();
echo $x.'<br>';


$y = 1000; // global
function demo2(){
    global $y; // access global variable inside function
    echo $y.'<br>';
}
demo2();
