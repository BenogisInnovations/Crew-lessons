<?php 
// Student info 
// Alteration of score will do computations as expected
 $Name = "Nana Yaw";
 $Class = 2;
 $Grade;
 $Score = 44;
 $Descripter;

// Logic to control the Grades Obtained by students
// i nested if statements in the if else statements to make it professional and not static.
 if($Score >= 80){
    $Grade = 1;
    if($Grade = 1){
        $Descripter = "Excellent";
    }
 }else if ($Score < 80 && $Score > 74){
    $Grade = 2;
    if($Grade  = 2){
        $Descripter = "Very Good";
    }
 }else if ($Score < 75 && $Score > 69){
    $Grade = 3;
    if ($Grade = 3){
        $Descripter = "Good";
    }
 }else if ($Score < 70 && $Score > 64){
    $Grade = 4;
    if ($Grade = 4){
        $Descripter = "Average";
    }
 }else if ($Score < 65 && $Score > 59){
    $Grade = 5;
    if ($Grade = 5){
        $Descripter = "Average";
    }
 }else if ($Score < 60 && $Score > 54){
    $Grade = 6;
    if ($Grade = 6){
        $Descripter = "BelowAverage";
    }
 }else if ($Score < 55 && $Score > 49){
    $Grade = 7;
    if ($Grade = 7){
        $Descripter = "BelowAverage";
    }
 }else if ($Score < 50 && $Score > 44){
    $Grade = 8;
    if ($Grade = 8){
        $Descripter = "Poor";
    }
 }else{
    $Grade = 9;
    if ($Grade = 9){
        $Descripter = "Fail";
    }
 }
?>