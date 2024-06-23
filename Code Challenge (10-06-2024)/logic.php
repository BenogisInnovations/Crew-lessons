<?php
//  student Details 
$studentName = "Regina Anane";
$studentClass = "JHS 2";
$studentScore = 75;
$grade='';
$StudentDescriptor='';

// $studentName = "Prince Frimpong";
// $studentClass = "JHS 1";
// $studentScore = 43;
// $grade='';
// $StudentDescriptor='';


/*******  Identifying the grade base on the mark he got********/
if ($studentScore >= 80 && $studentScore <= 100) {
    $studentGrade = 1;}
elseif ($studentScore >= 75 && $studentScore <= 79) {
    $studentGrade = 2;}
elseif ($studentScore >= 70 && $studentScore <= 74) {
        $studentGrade = 3;}
 elseif ($studentScore >= 65 && $studentScore <= 69) {
        $studentGrade = 4; }
 elseif ($studentScore >= 60 && $studentScore <= 64) {
        $studentGrade = 5; }
elseif ($studentScore >= 55 && $studentScore <= 59) {
        $studentGrade = 6;}
elseif ($studentScore >= 50 && $studentScore <= 54) {
        $studentGrade = 7;}
 elseif ($studentScore >= 45 && $studentScore <= 49) {
        $studentGrade = 8;}
 else { $studentGrade = 9; }

 /********  Conditions for grade to be be useed */

 if($studentGrade==1) {$studentDescriptor == "EXCELLENT";}
 elseif ($studentGrade == 2) {$studentDescriptor = "VERY GOOD";}
 elseif ($studentGrade == 3) {$studentDescriptor = "GOOD";}
 elseif ($studentGrade == 4 || $studentGrade == 5) {$studentDescriptor = "AVERAGE";}
 elseif ($studentGrade == 6 || $studentGrade == 7) {$studentDescriptor = "BELOW AVERAGE";} 
 elseif ($studentGrade == 8) {$studentDescriptor = "POOR";} 
 else {$studentDescriptor = "FAIL";}