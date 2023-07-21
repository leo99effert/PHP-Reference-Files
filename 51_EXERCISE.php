<?php
            //FUNCTIONS EXERCISE

/*
(1) define an "anonymous function" that multiplies two numbers and echo out the result.The function should only accept "floats and integers" as arguments
*/

declare(strict_types=1);

$product = function(float|int $x,float|int $y){
  return $x * $y;  
};
echo $product(3,2.5).'<br>';

/*   
(2) Convert the anonymous function in Question(1) into an arrow function
*/

$p = fn(float|int $x,float|int $y)=>$x * $y;
echo $p(2.2,4);






















