<?php

// Funtion to control the calculation 
function calculate($num1, $num2, $operation) {
    $result = 0;

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero error!";
            }
            break;
        default:
            $result = "Invalid operation!";
            break;
    }

    return $result;
}
?>
