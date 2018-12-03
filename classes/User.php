<?php

class User{
    //properties
    public $username = 'chard123';
    public $password = 'password123';
    public $isadmin = true; //boolean
    public $myName = 'Richard';
    public $age;

    //methods/functions
    public function sum($arg1,$arg2){
        $total = $arg1 + $arg2;
        return $total;
    }
    public function helloWorld(){
        return "Hello World";
    }

    protected function hello(){
        return "This is protected";
    }

}

//instance
// $user = new User();

// echo $user->username;

// $user->age = 25;

// echo $user->age;

// $user->myName = "John Doe";

// echo $user->myName;

// echo $user->hello(100, 250);

