<?php
//student Details
$students_name = "Kofi Anane";
$students_class = "JHS 1";
$students_score = 75;

//using if statement to determine the Grade 
if ($students_score >= 80 && $students_score <= 100) {
    $grade = 1;
} elseif ($students_score >= 75 && $students_score <= 79) {
    $grade = 2;
} elseif ($students_score >= 70 && $students_score <= 74) {
    $grade = 3;
} elseif ($students_score >= 65 && $students_score <= 69) {
    $grade = 4;
} elseif ($students_score >= 60 && $students_score <= 64) {
    $grade = 5;
} elseif ($students_score >= 55 && $students_score <= 59) {
    $grade = 6;
} elseif ($students_score >= 50 && $students_score <= 54) {
    $grade = 7;
} elseif ($students_score >= 45 && $students_score <= 49) {
    $grade = 8;
} elseif($students_score >= 0 && $students_score <= 39){
    $grade = 9;
}

//using if statement to determine the descriptor
if ($grade == 1) {
    $descriptor = "EXCELLENT";
} elseif ($grade == 2) {
    $descriptor = "VERY GOOD";
} elseif ($grade == 3) {
    $descriptor = "GOOD";
} elseif ($grade == 4 ){ 
    $descriptor = "AVERAGE";
}  elseif  ($grade == 5) {
    $descriptor = "AVERAGE";
} elseif ($grade == 6){
    $descriptor = "BELOW AVERAGE";
}  elseif  ($grade == 7) {
    $descriptor = "BELOW AVERAGE";
} elseif ($grade == 8) {
    $descriptor = "POOR";
} elseif ($grade == 9){
    $descriptor = "FAIL";
}

// Display the result in an HTML table
echo "<table border='1'>";
echo "<tr><th>NAME</th>
<th>CLASS</th>
<th>SCORE</th>
<th>GRADE</th>
<th>DESCRIPTOR</th></tr>";


echo "<tr><td>$students_name</td>
<td>$students_class</td>
<td>$students_score</td>
<td>$grade</td>
<td>$descriptor</td></tr>";
echo "</table>";
?>


