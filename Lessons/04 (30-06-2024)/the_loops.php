<?php

// Do while Loop
$names = ['Benjamin','Boakye','Otchere','Kofi','Ama'];
$ages = [12,13,25,9,8,4];

# THE DIFFERENCE BETWEEN THE 4 LOOPS
# **************************************

// For Loop | Aware of the number of items to loop through

// Foreach | You have less awareness of the number of items to loop through 

$i = 0;

// While | Check condition first before run code
while ($i < count($names)) {
    echo "$names[$i] <br>";
    $i++; 
}

// Do-while Run the code before checking condition
do {
    echo "$names[$i] <br>";
    $i++; // $i = $i + 1;
} while ($i < count($names));



