<?php
$name = 'Daniel Appiah Agyekum';
$class= 'JHS 3';
$score= 20;
$grade;
$descriptor;
switch (True) {
     case ($score >= 80 && $score <= 100):
         $grade = 1;
         $descriptor = "EXCELLENT";
         break;
     case ($score >= 75 && $score <= 79):
         $grade = 2;
         $descriptor = "VERY GOOD";
         break;
     case ($score >= 70 && $score <= 74):
         $grade = 3;
         $descriptor = "GOOD";
         break;
     case ($score >= 65 && $score <= 69):
         $grade = 4;
         $descriptor = "AVERAGE";
         break;
     case ($score >= 60 && $score <= 64):
         $grade = 5;
         $descriptor = "AVERAGE";
         break;
     case ($score >= 55 && $score <= 59):
         $grade = 6;
         $descriptor = "BELOW AVERAGE";
         break;
     case ($score >= 50 && $score <= 54):
         $grade = 7;
         $descriptor = "BELOW AVERAGE";
         break;
     case ($score >= 45 && $score <= 49):
         $grade = 8;
         $descriptor = "POOR";
         break;
     case ($score >= 0 && $score <= 39):
         $grade = 9;
         $descriptor = "FAIL";
         break;
}
        
    ?>
<!Doctype HTML>    
    <body>
        <table  border = 1; width = 50% ;>
            <tr>
            <th><center>NAME</center></th>
            <th><center>CLASS</center></th>
            <th><center>SCORE</center></th>
            <th><center>GRADE</center></th>
            <th><center>DESCRIPTOR</center></th>
            </tr>
            <tr>
                <td><center><?php echo $name; ?></center></td>
                <td><center><?php echo $class; ?></center></td>
                <td><center><?php echo $score; ?></center></td>
                <td><center><?php echo $grade; ?></center></td>
                <td><center><?php echo $descriptor; ?></center></td>
                
            </tr>
            
        </table>

    </body>

</html>
