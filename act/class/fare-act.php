<?php

class Fare {

var $age;
var $distance;

public function __construct($age, $distance){
    $this->age = $age;
    $this->distance = $distance;
}

function getAge(){
    return $this->age;
}
function getDistance(){
    return $this->distance;
}
function getFare(){
    if($this->distance <= 4){
        $fare = 8;
    }else{
        $fare = 8 + ($this->distance - 4);
    }

    if($this->age >= 60){
        $fare = $fare * 0.8;
    }

    return $fare;
}


}