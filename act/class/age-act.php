<?php

class AGE {

//properties

    var $first_name;
    var $last_name;
    var $birth_year;
    var $current_year;

    public function __construct($first_name, $last_name, $birth_year, $current_year){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birth_year = $birth_year;
        $this->current_year = $current_year;
    }


// method = function
function getFirstName(){
    return $this->first_name;
}
function getLastName(){
    return $this->last_name;
}
function getAge(){
    $age = $this->current_year - $this->birth_year;
    return $age;
}


}