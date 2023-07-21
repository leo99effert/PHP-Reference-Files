<?php

$paymentStatus = '3'; // switch only look at value and not datattype

switch($paymentStatus){
    case 1:
        echo 'success';
        break;
    case 2:
        echo 'pending';
        break;
    case 3:
        echo 'failed';
        break;
    default:
        echo 'undefined';
}