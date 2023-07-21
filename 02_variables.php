<?php

// legal characters for $variables
//         a-z A-Z 0-9 _

// (but can not start with number)

// variableNamesAreCamelCase


$firstName = 'Leo'; // assignment by value


$newFirstName = &$firstName; // assignment by reference - connects two variables

$firstName = 'L'; // newFirstName also changes

echo $newFirstName;

$newFirstName = 'Peo'; // firstName also changes

echo $firstName;

echo isset($firstName); // returns 1 if set and "" if not

echo empty($iqPoints); // returns 1 if undefined or empty