<?php
$student = [['English', 85],['Maths', 62],['Science', 45],['Social', 50],['BDT', 34],['RME', 90],['ICT', 82],['French', 77],['PE', 63], ['Orals', 43],];

// calculating the sum of best 2 subjects
function calculategrade($subjectScores) {
    return $subjectScores[0] + $subjectScores[1];
}

// grading system using if function
function grade($score) {
    if ($score >= 85) {
        return 'EXCELLENT';
    } elseif ($score >= 80) {
        return 'Very Good';
    } elseif ($score >= 75) {
        return 'Good';
    } elseif ($score >= 70) {
        return 'Average';
    } elseif ($score >= 65) {
        return 'Credit';
    } elseif ($score >= 60) {
        return 'Pass';
    } elseif ($score >= 55) {
        return 'Pass';
    } elseif ($score >= 50) {
        return 'Pass';
    } else {
        return 'Fail';
    }
}

// output
echo "Student | Total Score| Aggregate" ."<br>";
echo "***************************"."<br>";


?>
