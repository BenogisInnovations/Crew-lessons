<?php 
// Student info 
// Alteration of score will do computations as expected
 $Name1 = "Nana Yaw";
 $Class1 = 2;
 $Grade;
 $Score = 85;
 $Descripter;

 $Name2 = "Nana Sarfo";
 $Class2 = 3;
 $Grade2;
 $Score2 = 76;
 $Descripter3;

 $Name3 = "Austy Wasborni";
 $Class3 = 4;
 $Grade3;
 $Score3 = 65;
 $Descripter3;

 $Name4 = "Nana OSei";
 $Class4 = 5;
 $Grade4;
 $Score4 = 58;
 $Descripter4;

 $Name5 = "Appiah Manuel";
 $Class5 = 6;
 $Grade5;
 $Score5 = 53;
 $Descripter5;

 $Name6 = "Duah Ben";
 $Class6 = "JHS 1";
 $Grade6;
 $Score6 = 47;
 $Descripter6;

 $Name7 = "Baby Face";
 $Class7 = "JHS 2" ;
 $Grade7;
 $Score7 = 30;
 $Descripter7;


// Logic to control the Grades Obtained by students
// i nested if statements in the if else statements to make it professional and not static.

// Student 1

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

 // Student 2

 if($Score2 >= 80){
    $Grade2 = 1;
    if($Grade2 = 1){
        $Descripter2 = "Excellent";
    }
 }else if ($Score2 < 80 && $Score2 > 74){
    $Grade2 = 2;
    if($Grade2  = 2){
        $Descripter2 = "Very Good";
    }
 }else if ($Score2 < 75 && $Score2 > 69){
    $Grade2 = 3;
    if ($Grade = 3){
        $Descripter2 = "Good";
    }
 }else if ($Score2 < 70 && $Score > 64){
    $Grade2 = 4;
    if ($Grade2 = 4){
        $Descripter2 = "Average";
    }
 }else if ($Score2 < 65 && $Score2 > 59){
    $Grade2 = 5;
    if ($Grade2 = 5){
        $Descripter2 = "Average";
    }
 }else if ($Score2 < 60 && $Score2 > 54){
    $Grade2 = 6;
    if ($Grade2 = 6){
        $Descripter2 = "BelowAverage";
    }
 }else if ($Score2 < 55 && $Score2 > 49){
    $Grade2 = 7;
    if ($Grade2 = 7){
        $Descripter2 = "BelowAverage";
    }
 }else if ($Score2 < 50 && $Score2 > 44){
    $Grade2 = 8;
    if ($Grade2 = 8){
        $Descripter2 = "Poor";
    }
 }else{
    $Grade2 = 9;
    if ($Grade2 = 9){
        $Descripter2 = "Fail";
    }
 }

// Student 3 

 if($Score3 >= 80){
    $Grade3 = 1;
    if($Grade3 = 1){
        $Descripter3 = "Excellent";
    }
 }else if ($Score3 < 80 && $Score3 > 74){
    $Grade3 = 2;
    if($Grade3  = 2){
        $Descripter3 = "Very Good";
    }
 }else if ($Score3 < 75 && $Score3 > 69){
    $Grade3 = 3;
    if ($Grade3 = 3){
        $Descripter3 = "Good";
    }
 }else if ($Score3 < 70 && $Score3 > 64){
    $Grade3 = 4;
    if ($Grade3 = 4){
        $Descripter3 = "Average";
    }
 }else if ($Score3 < 65 && $Score3 > 59){
    $Grade3 = 5;
    if ($Grade3 = 5){
        $Descripter3 = "Average";
    }
 }else if ($Score3 < 60 && $Score3 > 54){
    $Grade3 = 6;
    if ($Grade3 = 6){
        $Descripter3 = "BelowAverage";
    }
 }else if ($Score3 < 55 && $Score3 > 49){
    $Grade3 = 7;
    if ($Grade3 = 7){
        $Descripter3 = "BelowAverage";
    }
 }else if ($Score3 < 50 && $Score3 > 44){
    $Grade3 = 8;
    if ($Grade3 = 8){
        $Descripter3 = "Poor";
    }
 }else{
    $Grade3 = 9;
    if ($Grade3 = 9){
        $Descripter3 = "Fail";
    }
 }

 // Student 4

 if($Score4 >= 80){
    $Grade4 = 1;
    if($Grade4 = 1){
        $Descripter4 = "Excellent";
    }
 }else if ($Score4 < 80 && $Score4 > 74){
    $Grade4 = 2;
    if($Grade4  = 2){
        $Descripter4 = "Very Good";
    }
 }else if ($Score4 < 75 && $Score4 > 69){
    $Grade4 = 3;
    if ($Grade4 = 3){
        $Descripter4 = "Good";
    }
 }else if ($Score4 < 70 && $Score4 > 64){
    $Grade4 = 4;
    if ($Grade4 = 4){
        $Descripter4 = "Average";
    }
 }else if ($Score4 < 65 && $Score4 > 59){
    $Grade4 = 5;
    if ($Grade4 = 5){
        $Descripter4 = "Average";
    }
 }else if ($Score4 < 60 && $Score4 > 54){
    $Grade4 = 6;
    if ($Grade4 = 6){
        $Descripter4 = "BelowAverage";
    }
 }else if ($Score4 < 55 && $Score4 > 49){
    $Grade4 = 7;
    if ($Grade4 = 7){
        $Descripter4 = "BelowAverage";
    }
 }else if ($Score4 < 50 && $Score4 > 44){
    $Grade4 = 8;
    if ($Grade4 = 8){
        $Descripter4 = "Poor";
    }
 }else{
    $Grade4 = 9;
    if ($Grade4 = 9){
        $Descripter4 = "Fail";
    }
 }

 // Student 5

 if($Score5 >= 80){
    $Grade5 = 1;
    if($Grade5 = 1){
        $Descripter5 = "Excellent";
    }
 }else if ($Score5 < 80 && $Score5 > 74){
    $Grade5 = 2;
    if($Grade5  = 2){
        $Descripter5 = "Very Good";
    }
 }else if ($Score5< 75 && $Score5> 69){
    $Grade5 = 3;
    if ($Grade5 = 3){
        $Descripter5 = "Good";
    }
 }else if ($Score5 < 70 && $Score5 > 64){
    $Grade5 = 4;
    if ($Grade5= 4){
        $Descripter5 = "Average";
    }
 }else if ($Score5 < 65 && $Score5 > 59){
    $Grade5 = 5;
    if ($Grade5 = 5){
        $Descripter5 = "Average";
    }
 }else if ($Score5 < 60 && $Score5 > 54){
    $Grade5 = 6;
    if ($Grade5 = 6){
        $Descripter5 = "BelowAverage";
    }
 }else if ($Score5 < 55 && $Score5 > 49){
    $Grade5 = 7;
    if ($Grade5 = 7){
        $Descripter5 = "BelowAverage";
    }
 }else if ($Score5 < 50 && $Score5 > 44){
    $Grade5 = 8;
    if ($Grade5 = 8){
        $Descripter5 = "Poor";
    }
 }else{
    $Grade5 = 9;
    if ($Grade5 = 9){
        $Descripter5 = "Fail";
    }
 }

 // Student 6
 if($Score6 >= 80){
    $Grade6 = 1;
    if($Grade6 = 1){
        $Descripter6 = "Excellent";
    }
 }else if ($Score6 < 80 && $Score6 > 74){
    $Grade6 = 2;
    if($Grade6  = 2){
        $Descripter6 = "Very Good";
    }
 }else if ($Score6 < 75 && $Score6 > 69){
    $Grade6 = 3;
    if ($Grade6 = 3){
        $Descripter6 = "Good";
    }
 }else if ($Score6 < 70 && $Score6 > 64){
    $Grade6 = 4;
    if ($Grade6 = 4){
        $Descripter6 = "Average";
    }
 }else if ($Score6 < 65 && $Score6 > 59){
    $Grade6 = 5;
    if ($Grade6 = 5){
        $Descripter6 = "Average";
    }
 }else if ($Score6 < 60 && $Score6 > 54){
    $Grade6 = 6;
    if ($Grade6 = 6){
        $Descripter6 = "BelowAverage";
    }
 }else if ($Score6 < 55 && $Score6 > 49){
    $Grade6 = 7;
    if ($Grade6 = 7){
        $Descripter6 = "BelowAverage";
    }
 }else if ($Score6 < 50 && $Score6 > 44){
    $Grade6 = 8;
    if ($Grade6 = 8){
        $Descripter6 = "Poor";
    }
 }else{
    $Grade6 = 9;
    if ($Grade6 = 9){
        $Descripter6 = "Fail";
    }
 }

 // Student 7

 if($Score7 >= 80){
    $Grade7 = 1;
    if($Grade7 = 1){
        $Descripter7 = "Excellent";
    }
 }else if ($Score7 < 80 && $Score7 > 74){
    $Grade7 = 2;
    if($Grade7  = 2){
        $Descripter7 = "Very Good";
    }
 }else if ($Score7 < 75 && $Score7 > 69){
    $Grade7 = 3;
    if ($Grade7 = 3){
        $Descripter7 = "Good";
    }
 }else if ($Score7 < 70 && $Score7 > 64){
    $Grade7 = 4;
    if ($Grade7 = 4){
        $Descripter7 = "Average";
    }
 }else if ($Score7 < 65 && $Score7 > 59){
    $Grade7 = 5;
    if ($Grade7 = 5){
        $Descripter7 = "Average";
    }
 }else if ($Score7 < 60 && $Score7 > 54){
    $Grade7 = 6;
    if ($Grade7 = 6){
        $Descripter7 = "BelowAverage";
    }
 }else if ($Score7 < 55 && $Score7 > 49){
    $Grade7 = 7;
    if ($Grade7 = 7){
        $Descripter7 = "BelowAverage";
    }
 }else if ($Score7 < 50 && $Score7 > 44){
    $Grade7 = 8;
    if ($Grade7 = 8){
        $Descripter7 = "Poor";
    }
 }else{
    $Grade7 = 9;
    if ($Grade7 = 9){
        $Descripter7 = "Fail";
    }
 }

?>