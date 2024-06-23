<?php
// Sample student information
$studentName = "Regina Anane";
$studentClass = "JHS 2";
$studentScore = 75;
$studentGrade = '';
$studentDescriptor = '';

// Determine grade based on score
switch (true) {
    case ($studentScore >= 80 && $studentScore <= 100):
        $studentGrade = 1;
        break;
    case ($studentScore >= 75 && $studentScore <= 79):
        $studentGrade = 2;
        break;
    case ($studentScore >= 70 && $studentScore <= 74):
        $studentGrade = 3;
        break;
    case ($studentScore >= 65 && $studentScore <= 69):
        $studentGrade = 4;
        break;
    case ($studentScore >= 60 && $studentScore <= 64):
        $studentGrade = 5;
        break;
    case ($studentScore >= 55 && $studentScore <= 59):
        $studentGrade = 6;
        break;
    case ($studentScore >= 50 && $studentScore <= 54):
        $studentGrade = 7;
        break;
    case ($studentScore >= 45 && $studentScore <= 49):
        $studentGrade = 8;
        break;
    default:
        $studentGrade = 9;
        break;
}

// Determine descriptor based on grade
switch ($studentGrade) {
    case 1:
        $studentDescriptor = "EXCELLENT";
        break;
    case 2:
        $studentDescriptor = "VERY GOOD";
        break;
    case 3:
        $studentDescriptor = "GOOD";
        break;
    case 4:
    case 5:
        $studentDescriptor = "AVERAGE";
        break;
    case 6:
    case 7:
        $studentDescriptor = "BELOW AVERAGE";
        break;
    case 8:
        $studentDescriptor = "POOR";
        break;
    default:
        $studentDescriptor = "FAIL";
        break;
}
?>