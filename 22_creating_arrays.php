<?php

$numbers = array(1,2,3); // old way
$numbers = [1,2,3]; // new way

$numbers[1] = 200; // altering a value
$numbers[] = 40; // appending a new value

echo '<pre>';
print_r($numbers);
echo '</pre>';

echo 'Value at index 0 is: '.$numbers[0];