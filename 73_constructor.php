<?php

class User{
    public $email;
    public $name;
    
    public function __construct($email,$name){
        $this->email = $email;
        $this->name = $name;
    }
    
    public function login(){
        echo 'user logged in';
    }
}

$userOne = new User('kevin@yahoo.com','Kevin');
$userTwo = new User('drake$gmail.com','Drake');

echo $userOne->email.'<br>';
echo $userOne->name.'<br>';

echo $userTwo->email.'<br>';
echo $userTwo->name.'<br>';