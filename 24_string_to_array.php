<?php

$vowels = 'a,e,i,o,u';

$arr = explode(',',$vowels); // convert to array

echo '<pre>';
print_r($arr);

echo current($arr); // "current" element of array
echo '<br>';

echo end($arr); // last element of array
echo '<br>';
echo current($arr);
echo '<br>';

echo next($arr); // next after the "current element of the array
echo '<br>';
echo next($arr);
echo '<br>';