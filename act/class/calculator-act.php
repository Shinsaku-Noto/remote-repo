<?php

class Calculator {

var $num1;
var $num2;
var $cal;

public function __construct($num1, $num2, $cal)
{
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->cal = $cal;
}

function getResult(){
    if($this->cal == "add"){
        $result = $this->num1 + $this->num2;
        return $result;
    }elseif($this->cal == "sub"){
        $result = $this->num1 - $this->num2;
        return $result;
    }elseif($this->cal == "mul"){
        $result = $this->num1 * $this->num2;
        return $result;
    }else{
        $result = $this->num1 / $this->num2;
        return $result;
    }
}


}