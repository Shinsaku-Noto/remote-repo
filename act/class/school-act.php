<?php

class School {

var $name;
var $year;
var $units;
var $lab;

function __construct($name, $year, $units, $lab){
    $this->name = $name;
    $this->year = $year;
    $this->units = $units;
    $this->lab = $lab;
}

function getYearPrice(){
    if($this->year == 1){
        $price = 550;
    }elseif($this->year == 2){
        $price = 630;
    }elseif($this->year == 3){
        $price = 470;
    }else{
        $price = 501;
    }

    return $price;
}

function getUnits(){
    return $this->units;
}

function getLabPrice(){
    if($this->lab == "with"){
        if($this->year == 1){
            $price = 3359;
        }elseif($this->year == 2){
            $price = 4000;
        }elseif($this->year == 3){
            $price = 2890;
        }else{
            $price = 3555;
        }
    }else{
        $price = 0;
    }
    
    return $price;
}

function getPrice(){
    $price = ($this->getYearPrice() * $this->getUnits()) + $this->getLabPrice();
    return $price;
}

function getLab(){
    if($this->lab == "with"){
        $lab = "(With Lab)";
    }else{
        $lab = "(Without Lab)";
    }

    return $lab;
}


}