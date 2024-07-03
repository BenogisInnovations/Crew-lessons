<?php
// Declaring my function ✅ Good Commenting
function calculator($num1, $num2,$operator){ 
    //I'm issueing command on how th operators shold work
    switch ($operator) {
    case '+':
        return $num1 + $num2;
    case '-':
        return $num1 - $num2;
    case '*':
        return $num1 * $num2;
    case '/':
        // the != is called is not equal to
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Please dvison by 0 is udefined";
        }
    default:
        return "I accept only Divison, Multiplication, Subtraction and Addition";
}
}
    
$num1 = 10;
$num2 = 0;
$operator = '/';
$result = calculator($num1, $num2,$operator);
echo"Result: " . $result;
    ?>

⭐⭐⭐⭐⭐ WELL DONE 👏👏👏👏👏

