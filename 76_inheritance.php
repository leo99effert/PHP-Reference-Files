<?php

class User{
    public $email;
    protected $name;
    
    public $role = 'guest';
    
    public static $retirementAge = 65;
    
    public static function getRetirementAge(){
        echo self::$retirementAge.'<br>';
    }
    
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
        echo 'user logged in<br>';
    }
}

class Admin extends User{
    public $role = 'admin';
    
    public $level;
    
    public function __construct($email,$name,$level){
        $this->level = $level;
        parent::__construct($email,$name);
    }
    
    public function login(){
        echo "$this->name logged in<br>";
    }
}

$adminOne = new Admin('joe@abc.com','Joe',7);
echo $adminOne->role.'<br>';
$adminOne->login();
echo $adminOne->level.'<br>';

$userOne = new User('kevin@yahoo.com','Kevin');
$userTwo = new User('drake$gmail.com','Drake');

$userTwo->setName(55); // invalid name

echo User::$retirementAge.'<br>';
User::getRetirementAge();

echo $userOne->email.'<br>';
$userOne->getName();

echo $userTwo->email.'<br>';
$userTwo->getName();

