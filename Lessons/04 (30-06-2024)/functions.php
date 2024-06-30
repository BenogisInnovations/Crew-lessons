<?php

// FUNCTIONS

# Lets BUILD!!!!! :) 😁
function calculator($num1, $num2, $num3, $num4, $num5, $type){
    
}



$firstName = 'Benjamin';
$secondName = 12597494721681;
$lastName = 'Yiadom';
# The function name should describe what you are trying to do
// the data or variables passed into a function is called parameters or arguments
function getFullName(string $firstName, string $secondName = null, string $lastName){
    $fullName = "$firstName $secondName  $lastName";
    return $fullName;
} 

// Calling Function
echo getFullName($firstName,'',$lastName);


// This way of coding is called, procedure programming
# Its creating custom variables and other data types to perform some functionalities
// $students = ['Kofi','Ama','Akua','Yaa'];
// $studentScore = 0;

// $firstNumber = 10;
// $secondNumber = 20;

// $total = $firstNuber + $secondNumber;

// $average = $total / 2;

// $studentScore = $total * $average;