<?php
            //LOOPS EXERCISE

/*   
(1) Write a while loop that will display the numbers from 1 - 10.If the output is an 'even' number ,echo out the number and the word 'even'.
*/

$n = '1';
while($n <= 10){
    echo $n;
    if($n % 2 == 0) echo ' even';
    echo '<br>';
    $n++;
}
echo '<br>';
/*

(2) $data = ['blue',18,3.55,false,[1,2,3],null];

Write a foreach loop that will display all the data types of the elements in the array'.
*/

$data = ['blue',18,3.55,false,[1,2,3],null];
foreach($data as $d){
    echo gettype($d).'<br>';
}