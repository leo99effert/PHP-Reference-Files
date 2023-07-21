<?php

class User{
    public $email;
    public $name;
    
    public function login(){
        echo 'user logged in';
    }
}

$userOne = new User();
$userOne->email = 'kevin@yahoo.com';
$userOne->name = 'Kevin';

$userTwo = new User();
$userTwo->email = 'drake$gmail.com';
$userTwo->name = 'Drake';

echo $userOne->email.'<br>';
echo $userOne->name.'<br>';

echo $userTwo->email.'<br>';
echo $userTwo->name.'<br>';