<?php

// assosiative array
$customers = ['name'=>'Zlatan','age'=>15,'gender'=>'god'];
$customers['city'] = 'Milano';


echo '<pre>';

print_r($customers);

print_r(array_values($customers));
print_r(array_keys($customers));

echo $customers['gender'];

$customers['age']++;

echo $customers['age'];

