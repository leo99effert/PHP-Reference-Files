<?php

declare(strict_types=1); // allow functions to be strict

function greet(string|int $name = null,string|int $surname = null){
    return "hello $name $surname<br>";
}

var_dump(greet(1, '2'));
greet('Leo','Effert');
greet('Zlatan','Ibrahimovic');