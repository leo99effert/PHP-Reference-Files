<?php

// scalers - one piece of data

$title = 'Oliver Twist'; // string
$published = 1835; // integer
$price = 9.99; // float or double
$isAwesome = true; // boolean
    

// componds - many pieces of data in one place

$character = ['Fagin','Bill Siken','Nancy']; // array
# object
# iterable
# callable


// specials - neither one or many pieces of data
$nothing = NULL; // no value
# resource


echo gettype($price);    // get the type
var_dump($price);        // get the type and value