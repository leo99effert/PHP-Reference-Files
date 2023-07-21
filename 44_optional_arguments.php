<?php

function greet($name = null,$surname = null){
    echo "hello $name $surname<br>";
}

greet('Leo','Effert');
greet('Zlatan','Ibrahimovic');
greet();