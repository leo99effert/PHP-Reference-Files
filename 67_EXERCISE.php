<?php

/* (1)Encrypt the password using the blowfish hashing type and echo out the password.

$password = "pass123#";

*/

$password = "pass123#";

$blowfish = '$2y$'.'12'.'$'.'somesillystringforsalt';
$password = crypt($password,$blowfish);

echo $password;