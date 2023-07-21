<?php

class User{
    public $email;
    public $name;
    
    public function login(){
        echo 'user logged in';
    }
}

var_dump(class_exists('User'));

var_dump(get_class_vars('User')); // get the properties of a class

var_dump(get_class_methods('User')); // get the functions of a class