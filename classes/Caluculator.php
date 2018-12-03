<?php

class Caluculator{

    //prooerties
    public $hello = "Hello World";
    private $password = "123456";
    public $title = "Caluculator";

    //methods
    public function __construct(){
        echo "Hello World";
    }

    public function calculate($num1, $num2, $select){
        if($select == "+"){
            return $num1 + $num2 . "<br>" . $this->helloworld();
        }
        elseif($select == "-"){
            return $num1 - $num2;
        }
        elseif($select == "*"){
            return $num1 * $num2;
        }
        elseif($select == "/"){
            return $num1 / $num2;
        }
    }

    public function helloworld(){
        return "Hello World";
    }
}