<?php

// unknown number of arguments
function sum(...$numbers){
    return array_sum($numbers);
}

echo sum(10,20,1000,50,500);