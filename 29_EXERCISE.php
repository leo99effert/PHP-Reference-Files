<?php
            //ARRAY EXERCISE

/*   
(1) Convert the string "example.pdf" into an array, the delimiter is "." .Echo out the last element in the array.
*/

$s = 'example.pdf';
$a = explode('.',$s);
echo end($a);


/*   
(2)  Create an array with integer values that range from 11-20 and print the array.
*/
$integers = range(11,20);

echo '<pre>';
print_r($integers);