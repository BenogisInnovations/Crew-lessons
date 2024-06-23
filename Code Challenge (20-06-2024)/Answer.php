<?php
//student info
$studentName="Kofi Anane";
$studentClass="JHS 1";
$studentScore="75";
$grade=" ";
$gradedescriptor=" ";


//score range and grade of the student
switch($studentScore){
case ($studentScore >= 80 && $studentScore <= 100):
    $grade= "1";
    break;

case ($studentScore >= 75 && $studentScore <= 79):
    $grade= "2";
    break;

case ($studentScore >= 70 && $studentScore <= 74):
    $grade= "3";
    break;

case ($studentScore >= 65 && $studentScore <= 69):
    $grade= "4";
    break;

case ($studentScore >= 60 && $studentScore <= 64):
    $grade= "5";
    break;

case ($studentScore >= 55 && $studentScore <= 59):
    $grade= "6";
    break;

case ($studentScore >= 50 && $studentScore <= 54):
    $grade= "7";
    break;

case ($studentScore >= 45 && $studentScore <= 49):
    $grade= "8";
    break;

case ($studentScore >= 0 && $studentScore <= 39):
    $grade= "9";
    break;

    default:
    echo"You did not write the exams";
}
//student grade and descriptor
switch($grade){
    case "1":
        $gradedescriptor="EXCELLENT";
        break;

    case "2":
        $gradedescriptor="VERY GOOD";
        break;

    case "3":
        $gradedescriptor="GOOD";
        break;

    case "4":
        $gradedescriptor="AVERAGE";
        break;

    case "5":
        $gradedescriptor="AVERAGE";
        break;

    case "6":
        $gradedescriptor="BELOW AVERAGE";
        break;

    case "7":
        $gradedescriptor="BELOW AVERAGE";
        break;

    case "8":
        $gradedescriptor="POOR";
        break;

    case "9":
        $gradedescriptor="FAIL";
        break;

}
//Display of student details in an HTML Table form
echo "<table border='1'>
        <tr>
            <th>NAME</th>
            <th>CLASS</th>
            <th>SCORE</th>
            <th>GRADE</th>
            <th>DESCRIPTOR</th>
        </tr>";

        echo "<tr>
            <td>$studentName</td>
            <td>$studentClass</td>
            <td>$studentScore</td>
            <td>$grade</td>
            <td>$gradedescriptor</td>
          </tr>";


echo "</table>";
?>