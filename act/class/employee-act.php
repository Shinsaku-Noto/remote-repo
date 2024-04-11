<?php

class Employee {

var $civil_status;
var $position;
var $employment_status;
var $hours;

function __construct($civil_status, $position, $employment_status, $hours) {
    $this->civil_status = $civil_status;
    $this->position = $position;
    $this->employment_status = $employment_status;
    $this->hours = $hours;
}

function getRegularDay(){
    if($this->hours <= 40){
        $plus = $this->hours % 8;
        $regularHours = $this->hours - $plus;
        $regular_day = $regularHours / 8;
    }else{
        $regular_day = 5;
    }

    return $regular_day;
}

function getDailyPay(){
    if($this->position == "Admin"){
        if($this->employment_status == "Contractual"){
            $price = 350;
        }elseif($this->employment_status == "Probationaly"){
            $price = 400;
        }else{
            $price = 500;
        }
    }else{
        if($this->employment_status == "Contractual"){
            $price = 300;
        }elseif($this->employment_status == "Probationaly"){
            $price = 350;
        }else{
            $price = 400;
        }
    }

    return $price;
}

function getRegularPay(){
    return $this->getRegularDay() * $this->getDailyPay();
}

function getOvertimeHours(){
    if($this->hours > 40){
        $overtimeHours = $this->hours - 40;
    }else{
        $overtimeHours = 0;
    }

    return $overtimeHours;
}

function getHourlyOvertimePay(){
    if($this->position == "Admin"){
        if($this->employment_status == "Contractual"){
            $price = 15;
        }elseif($this->employment_status == "Probationaly"){
            $price = 30;
        }else{
            $price = 40;
        }
    }else{
        if($this->employment_status == "Contractual"){
            $price = 10;
        }elseif($this->employment_status == "Probationaly"){
            $price = 25;
        }else{
            $price = 30;
        }
    }

    return $price;
}

function getOvertimePay(){
    return $this->getOvertimeHours() * $this->getHourlyOvertimePay();
}

function getGrossIncome(){
    return $this->getRegularPay() + $this->getOvertimePay();
}

function getTaxDeductionsRate(){
    if($this->civil_status == "Single"){
        if($this->getGrossIncome() > 1000){
            $rate = 0.05;
        }else{
            $rate = 0;
        }
    }else{
        if($this->getGrossIncome() > 1500){
            $rate = 0.03;
        }else{
            $rate = 0;
        }
    }

    return $rate;
}

function getTaxDeductions(){
    return $this->getGrossIncome() * $this->getTaxDeductionsRate();
}

function getHealthcareDeductions(){
    if($this->civil_status == "Single"){
        $deduction = 200;
    }else{
        $deduction = 75;
    }

    return $deduction;
}

function getNetIncome(){
    return $this->getGrossIncome() - $this->getTaxDeductions() - $this->getHealthcareDeductions();
}

}