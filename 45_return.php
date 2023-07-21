<?php

function greet($name = null,$surname = null){
    return "hello $name $surname<br>";
}

var_dump(greet());
greet('Leo','Effert');
greet('Zlatan','Ibrahimovic');