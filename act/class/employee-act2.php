<?php

class Employee {

var $civil_status;
var $position;
var $employment_status;
var $hours;

var $regularPay = array('Admin' => array('Contractual' => '350', 'Probationary' => '400', 'Regular' => '500'),
                        'Staff' => array('Contractual' => '300', 'Probationary' => '350', 'Regular' => '400'));

var $overtimePay = array('Admin' => array('Contractual' => '15', 'Probationary' => '30', 'Regular' => '40'),
                        'Staff' => array('Contractual' => '10', 'Probationary' => '25', 'Regular' => '30'));

var $taxDeductions = ['singe' => 0.05, 'married' => 0.03];
var $healthcareDeductions = ['singe' => 200, 'married' => 75];

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
    return $regularPay[$this->position][$this->employment_status];
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
    return $overtimePay[$this->position][$this->employment_status];
}

function getOvertimePay(){
    return $this->getOvertimeHours() * $this->getHourlyOvertimePay();
}

function getGrossIncome(){
    return $this->getRegularPay() + $this->getOvertimePay();
}

function getTaxDeductionsRate(){
    if($this->civil_status == "Single"){
        return $taxDeductions[$this->civil_status];
}

function getTaxDeductions(){
    return $this->getGrossIncome() * $this->getTaxDeductionsRate();
}

function getHealthcareDeductions(){
    return $healthcareDeductions[$this->civil_status];
}

function getNetIncome(){
    return $this->getGrossIncome() - $this->getTaxDeductions() - $this->getHealthcareDeductions();
}

}