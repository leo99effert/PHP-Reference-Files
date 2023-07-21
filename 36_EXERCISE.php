<?php
            //CONDITIONALS EXERCISE

/*   
(1) Write a match statement that is going to replace the switch statement below

$dayOfTheWeek = 1; //the first day of the week is a Sunday

switch($dayOfTheWeek){
 case 1:
 case 7:
 echo "Off day";
  break;
 default:
  echo "Working day";
}
*/
$dayOfTheWeek = 1;
echo match($dayOfTheWeek){
    1,7 => 'off day',
    default => 'working day'
};


/* (2) Convert the if else statement below into a ternary expression.

$isRaining = true;

if($isRaining){
echo "stay in-doors";
}else{
echo "go fishing";
}
*/
$isRaining = true;

echo $isRaining ? "stay in-doors" : "go fishing";

