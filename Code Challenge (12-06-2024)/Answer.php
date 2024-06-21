<?php
// I'm creating a variable to hold the student name, class and score
$students = [
    [
        'name' => 'Daniel Appiah Agyekum',
        'class' => 'JHS 1',
        'score' => 75
    ],
    [
        'name' => 'Gideon Yeboah',
        'class' => 'JHS 1',
        'score' => 65
    ],
    [
        'name' => 'Esther Nsiah',
        'class' => 'JHS 1',
        'score' => 55
    ],
    [
        'name' => 'Yaw Sarfo',
        'class' => 'JHS 1',
        'score' => 45
    ],
    [
        'name' => 'Doris Yaa Konadu',
        'class' => 'JHS 1',
        'score' => 35
    ],
];
// these are the if function to generate grade of students base on the score
function getGrade($score) {
    if ($score >= 80 && $score <= 100) {
        return 1;
    } elseif ($score >= 75 && $score <= 79) {
        return 2;
    } elseif ($score >= 70 && $score <= 74) {
        return 3;
    } elseif ($score >= 65 && $score <= 69) {
        return 4;
    } elseif ($score >= 60 && $score <= 64) {
        return 5;
    } elseif ($score >= 55 && $score <= 59) {
        return 6;
    } elseif ($score >= 50 && $score <= 54) {
        return 7;
    } elseif ($score >= 45 && $score <= 49) {
        return 8;
    } else {
        return 9;
    }
}

// Fuction to give remarks or names to the gade
function getDescriptor($grade) {
    switch ($grade) {
        case 1:
            return "EXCELLENT";
        case 2:
            return "VERY GOOD";
        case 3:
            return "GOOD";
        case 4:
        case 5:
            return "AVERAGE";
        case 6:
        case 7:
            return "CREDIT";
        case 8:
            return "PASS";
        case 9:
            return "FAIL";
        default:
            return "UNKNOWN";
    }
}

// Here too, i'm creating HTML table to arrange my output
echo "<table border='1'>";
echo "<tr>
        <th>NAME</th>
        <th>CLASS</th>
        <th>SCORE</th>
        <th>GRADE</th>
        <th>DESCRIPTOR</th>
      </tr>";

foreach ($students as $student) {
    $name = $student['name'];
    $class = $student['class'];
    $score = $student['score'];
    $grade = getGrade($score);
    $descriptor = getDescriptor($grade);
    
    echo "<tr>
            <td>{$name}</td>
            <td>{$class}</td>
            <td>{$score}</td>
            <td>{$grade}</td>
            <td>{$descriptor}</td>
          </tr>";
}

echo "</table>";
?>
