<?php
$name = 'Daniel Appiah Agyekum';
$class= 'JHS 3';
$score= 20;
$grade;
$descriptor;
if($score >= 80){
     $grade = 1;
    if($grade = 1){
         $descriptor = 'Exellent';
    }
} else if ($score >= 75){
     $grade = 2;
    if($grade = 2){
         $descriptor = 'Very good';
    }
}else if ($score >= 70){
     $grade = 3;
    if($grade = 3){
         $descriptor = 'Good';}
    }
        else if ($score >= 65){
         $grade = 4;
        if($grade = 4){
             $descriptor = 'Average';}
        }else if ($score >= 60){
             $grade = 5;
            if($grade = 5)
            {
                 $descriptor = ' Average';
            }
        }else if ($score >= 55){
             $grade = 6;
            if($grade = 6){
                 $descriptor = 'Below Average';}
            }else if ($score >= 50){
                 $grade = 7;
                if($grade = 7){
                     $descriptor = 'Below Average';}
                }else if ($score >= 45){
                     $grade = 8;
                    if($grade = 8){
                        echo $descriptor = 'Pass';}
                    }else if ($score >=0 && $score <39){
                         $grade = 9;
                        if($grade = 9){
                             $descriptor = 'Fail';}
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
