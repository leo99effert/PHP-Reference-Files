<?php

$students = ['Leo','Zlatan','Messi'];

array_push($students,'Ronaldo','Neymar'); // append several new values
echo '<pre>';


print_r($students);

array_unshift($students,'Tom','Jerry'); // add to the beginning
print_r($students);

echo array_pop($students).' is removed here<br>'; // Remove last element
print_r($students);

array_shift($students); // Remove first element
print_r($students);

var_dump(in_array('Leo',$students)); // Look for value in array
var_dump(array_search('Zlatan',$students)); // Get index of value

sort($students);
print_r($students);

rsort($students);
print_r($students);