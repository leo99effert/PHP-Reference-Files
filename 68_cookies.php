<?php

// setcookie(name,value,expire,path,domain,security,httponly)
// only name is mandatory

// cookies => client
// session => server

setcookie('language','EN-GB',time() - (86400*30));

print_r($_COOKIE);

echo '<br>';

if(isset($_COOKIE['language'])){
    echo $_COOKIE['language'];
}