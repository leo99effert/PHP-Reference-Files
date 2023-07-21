<?php

$paymentStatus = '1'; // match looks at value AND datatype

$match = match($paymentStatus){
    1 => 'success',
    2 => 'pending',
    3 => 'failed',
    default => 'undefined'
};

echo $match;
