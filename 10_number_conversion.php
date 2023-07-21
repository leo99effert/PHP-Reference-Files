<?php

$number = '10';
$n = '10';
$wannaBeFloat = '10';
$wannaBeF = '10';
$s = 5;

// convert to integer
$number = (int)$number; 
$n = intval($n);

// convert to float
$wannaBeFloat = (float)$wannaBeFloat;
$wannaBeF = floatval($wannaBeF);

// convert to string
$s = (string)$s;

var_dump($number);
var_dump($n);
var_dump($wannaBeFloat);
var_dump($wannaBeF);
var_dump($s);
