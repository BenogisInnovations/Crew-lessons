<?php
// student's name, class, and score
$name = "Kofi Anane";
$class = "JHS 1";
$score = 75;

//Determine The Grade Based On The Score using switch cases
switch ($score) {
    case ($score >= 80 && $score <= 100):
        $grade = 1;
        break;
    case ($score >= 75 && $score <= 79):
        $grade = 2;
        break;
    case ($score >= 70 && $score <= 74):
        $grade = 3;
        break;
    case ($score >= 65 && $score <= 69):
        $grade = 4;
        break;
    case ($score >= 60 && $score <= 64):
        $grade = 5;
        break;
    case ($score >= 55 && $score <= 59):
        $grade = 6;
        break;
    case ($score >= 50 && $score <= 54):
        $grade = 7;
        break;
    case ($score >= 45 && $score <= 49):
        $grade = 8;
        break;
    default:
        $grade = 9;
}

//Determine The Descriptor Based On The Grade using switch cases
switch ($grade) {
    case 1:
        $descriptor = "EXCELLENT";
        break;
    case 2:
        $descriptor = "VERY GOOD";
        break;
    case 3:
        $descriptor = "GOOD";
        break;
    case 4:
        $descriptor = "AVERAGE";
        break;
    case 5:
        $descriptor = "AVERAGE";
        break;
    case 6:
        $descriptor = "BELOW AVERAGE";
        break;
    case 7:
        $descriptor = "BELOW AVERAGE";
        break;
    case 8:
        $descriptor = "POOR";
        break;
    case 9:
        $descriptor = "FAIL";

        default:
        echo "You did not write the exams";
}

// Display the results in an HTML table
echo "<table border='1'>";
echo "<tr><th>NAME</th>
      <th>CLASS</th>
      <th>SCORE</th>
      <th>GRADE</th>
     <th>DESCRIPTOR</th></tr>";

echo "<tr><td>$name</td>
      <td>$class</td>
      <td>$score</td>
     <td>$grade</td>
     <td>$descriptor</td></tr>";
echo "</table>";
?>

