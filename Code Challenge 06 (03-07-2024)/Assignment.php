<?php

// Student data
$student = [
    ['English', 85],
    ['Maths', 62],
    ['Science', 45],
    ['Social', 50],
    ['BDT', 34],
    ['RME', 90],
    ['ICT', 82],
    ['French', 77],
    ['PE', 63],
    ['Orals', 43],
];

// Function to calculate total score
function calculateTotalScore($student) {
    $total = 0;
    foreach ($student as $subject) {
        $total += $subject[1];
    }
    return $total;
}

// Function to determine grade and remark
function getGradeAndRemark($score) {
    if ($score >= 80) {
        return ['01', 'EXCELLENT'];
    } elseif ($score >= 70) {
        return ['02', 'VERY GOOD'];
    } elseif ($score >= 60) {
        return ['03', 'GOOD'];
    } elseif ($score >= 50) {
        return ['04', 'CREDIT'];
    } elseif ($score >= 40) {
        return ['05', 'PASS'];
    } else {
        return ['09', 'FAIL'];
    }
}

// Function to calculate aggregate
function calculateAggregate($student) {
    $grades = [];
    foreach ($student as $subject) {
        $grades[] = getGradeAndRemark($subject[1])[0];
    }
    sort($grades);
    $firstFourSum = array_sum(array_slice($grades, 0, 4));
    $bestTwoSum = array_sum(array_slice($grades, 0, 2));
    return $firstFourSum + $bestTwoSum;
}

// Display results
$totalScore = calculateTotalScore($student);
$aggregate = calculateAggregate($student);

echo "Student1 | TOTAL SCORE: $totalScore | Aggregate: $aggregate\n";
echo "<br>  <br> ";
echo "***********************************************\n";
echo "<br>  <br> ";

foreach ($student as $subject) {
    list($subjectName, $score) = $subject;
    list($grade, $remark) = getGradeAndRemark($score);
    printf("%-7s | %-3d | %-2s | %-10s\n", $subjectName, $score, $grade, $remark);

    echo "<br>";
    
}
?>

