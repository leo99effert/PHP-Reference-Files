<?php

// joining strings with OPERATOR, (.)
echo 'Hello'.' '.'world'.'<br>';


// joining strings with ASSIGNMENT, (.=)

$a = 'Goodbye';
$a .= ' ';
$a .= 'cruel';
$a .= ' ';
$a .= 'world';
$a .= '<br>';
echo $a;

// joining strings with variable interpolation, ($x)

$x = 'Hi';
$y = 'planet';
$z = 'Mars';
echo "$x $y $z! <br>"; // double quotes needed, ("")
echo "$x {$z}ian"; // brackets needed to end variable name, ({}) 

