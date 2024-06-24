<?php

// 0 or 1 true = 1 false = 0

// if (1+1=2) say correct else say wrong
// if (he is a boy) then (is he above 10 years?) then say you might be in JHS else say You are in Primary else Go to girls school
// ==
$gender = 'female';
$class = 'Nursery 1';
$matthew = 2;
$mark = 2;
$luke = 2;
$john = 1;

    switch($gender) {                           // if($gender == 'male' && $age > 15) {
                                                // if($age > 10) {
        case 'female' && $age > 15:                         // echo 'you might be in JHS';
            echo 'You are a girl';              // } else {
        break;                                  // echo 'You are in Primary';
                                                // }
        case 'male' :                           // } else if($gender == 'female') {
            echo 'You are a boy';               // if($age > 15) {
        break;                                  // echo 'you might be in SHS';
                                                // } else {
        default:                                        // echo 'you might be in JHS'; // Showing
            echo 'Go to Pluto';                                    // }
        break;                                    // } 
                                                // echo 'Go to Pluto';
    }                                        // }
















// $studentScore = 19;
// $studentGrade = '';
// $age = 22; // Assigning
// if($age >= 18 && $age < 20){ // Checking
//     echo "You can vote"; // Codition 1
// } else if($age > 20) {
//     echo "You can vote, use the adult polling station"; // Codition 2
// } else { 
//     echo "You cant vote"; // Codition 3
// }

// switch ($studentScore) {
//     case $studentScore >= 80 && $studentScore <= 100:
//         $studentGrade = 1;
//         break;
//     case $studentScore >= 75 && $studentScore <= 79:
//         $studentGrade = 2;
//         break;
    
//     default:
//         echo 'No result';
//         break;
// }

// echo $studentGrade;

/*******  Identifying the grade base on the mark he got********/
// if ($studentScore >= 80 && $studentScore <= 100) {
//     $studentGrade = 1;
// }
// elseif ($studentScore >= 75 && $studentScore <= 79) {
//     $studentGrade = 2;
// }
// elseif ($studentScore >= 70 && $studentScore <= 74) {
//         $studentGrade = 3;
//     }
//  elseif ($studentScore >= 65 && $studentScore <= 69) {
//         $studentGrade = 4; 
// }
//  elseif ($studentScore >= 60 && $studentScore <= 64) {
//         $studentGrade = 5; }
// elseif ($studentScore >= 55 && $studentScore <= 59) {
//         $studentGrade = 6;}
// elseif ($studentScore >= 50 && $studentScore <= 54) {
//         $studentGrade = 7;}
//  elseif ($studentScore >= 45 && $studentScore <= 49) {
//         $studentGrade = 8;}
//  else { $studentGrade = 9; }

