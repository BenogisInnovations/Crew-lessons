<?php
 $Name = "Nana Sarfo Kantanka";
 $Class = "Basic 6";
 $Score = 50;
 $Grade;
 $Descriptor;

 switch(true){
    case ($Score >= 80) :
        $Grade = 1;
    break;
    
    case ($Score < 80 && $Score > 74) :
        $Grade = 2;
    break;
    
    case ($Score < 75 && $Score > 69) :
        $Grade = 3;
    break;
    
    case ($Score < 70 && $Score > 64) :
        $Grade = 4;
    break;
    
    case ($Score < 65 && $Score > 59) :
        $Grade = 5;
    break;
    
    case ($Score < 60 && $Score > 54) :
        $Grade = 6;
    break;
    
    case ($Score < 55 && $Score > 49) :
        $Grade = 7;
    break; 
    
    case ($Score < 50 && $Score > 44) :
        $Grade = 8;
    break;
    
    default :
        $Grade = 9;
 }

 switch($Grade){
    case 1 :
        $Descriptor = "Excellent";
    break;
    
    case 2 :
        $Descriptor = "Very Good";
    break;
    
    case 3 :
        $Descriptor = "Good";
    break;
    
    case 4 :
    case 5 :
        $Descriptor = "Average";
    break; 
    
    case 6 :
    case 7 :    
        $Descriptor = "Below Average";
    break;
    
    case 8 : 
        $Descriptor = "Poor";
    break;
    
    case 9 :
        $Descriptor = "Fail";
    break;

    default :
        $Descriptor = "Ivalid Grade";
 }


?>