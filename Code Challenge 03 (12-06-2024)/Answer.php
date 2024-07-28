<?php
<<<<<<< HEAD:Code Challenge 03 (12-06-2024)/Answer.php
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


=======
// Array to hold student details including scores
$students = [
    ["name" => "Kofi Anane", "class" => "JHS 1", "score" => 75],
    ["name" => "Ama Mensah", "class" => "JHS 2", "score" => 82],
    ["name" => "Kwame Nkrumah", "class" => "SHS 1", "score" => 68],
    ["name" => "Akosua Addo", "class" => "JHS 3", "score" => 53],
    ["name" => "Yaw Asante", "class" => "SHS 2", "score" => 40],
    ["name" => "Esi Bediako", "class" => "SHS 3", "score" => 91],
    ["name" => "Kojo Owusu", "class" => "JHS 1", "score" => 76],
    ["name" => "Aba Ofori", "class" => "JHS 2", "score" => 67],
    ["name" => "Mensah Opoku", "class" => "SHS 1", "score" => 71],
    ["name" => "Adjoa Kumi", "class" => "JHS 3", "score" => 88],
    ["name" => "Yaw Boakye", "class" => "SHS 2", "score" => 54],
    ["name" => "Akua Agyeman", "class" => "SHS 3", "score" => 65],
    ["name" => "Kwadwo Frimpong", "class" => "JHS 1", "score" => 79],
    ["name" => "Abena Korkor", "class" => "JHS 2", "score" => 48],
    ["name" => "Kojo Ampofo", "class" => "SHS 1", "score" => 73]
];

// Determine grade based on score
function determineGrade($score) {
    if ($score >= 80) return 1;
    if ($score >= 75) return 2;
    if ($score >= 70) return 3;
    if ($score >= 65) return 4;
    if ($score >= 60) return 5;
    if ($score >= 55) return 6;
    if ($score >= 50) return 7;
    if ($score >= 45) return 8;
    return 9;
}

// Determine grade remark based on grade
function determineDescriptor($grade) {
    if ($grade == 1) return "EXCELLENT";
    if ($grade == 2) return "VERY GOOD";
    if ($grade == 3) return "GOOD";
    if ($grade == 4 || $grade == 5) return "AVERAGE";
    if ($grade == 6 || $grade == 7) return "BELOW AVERAGE";
    if ($grade == 8) return "POOR";
    return "FAIL";
}

// Display the students' grades in an HTML table
echo "<table border='1'>
        <tr>
            <th>NAME</th>
            <th>CLASS</th>
            <th>SCORE</th>
            <th>GRADE</th>
            <th>DESCRIPTOR</th>
        </tr>";

foreach ($students as $student) {
    $grade = determineGrade($student['score']);
    $remark = determineDescriptor($grade);
    echo "<tr>
            <td>{$student['name']}</td>
            <td>{$student['class']}</td>
            <td>{$student['score']}</td>
            <td>{$grade}</td>
            <td>{$remark}</td>
          </tr>";
}

echo "</table>";
?>
>>>>>>> 786d6ad05d7d9ff0e9c7ab58b3de534df8a2e694:Code Challenge (12-06-2024)/Answer.php
