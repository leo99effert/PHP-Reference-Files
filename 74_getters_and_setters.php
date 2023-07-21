<?php

class User{
    public $email;
    private $name;
    
    public function setName($name){
        if(is_string($name) and strlen($name) > 2) $this->name = $name;
        else echo 'invalid name<br>';
    }
    
    public function getName(){
        echo $this->name.'<br>';
    }
    
    public function __construct($email,$name){
        $this->email = $email;
        $this->setName($name);
    }
    
    public function login(){
        echo 'user logged in';
    }
}

$userOne = new User('kevin@yahoo.com','Kevin');
$userTwo = new User('drake$gmail.com','Drake');

$userTwo->setName(55); // invalid name

echo $userOne->email.'<br>';
$userOne->getName();

echo $userTwo->email.'<br>';
$userTwo->getName();

