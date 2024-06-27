<?php

 // Countries 
 $country1 = 'Germany';
 $country2 = 'Benin';
 $country3 = 'Ghana';
 $country4 = 'England';
 $country5 = 'France';
 $country6 = 'Korea';

 // Capitals 
$Capital1 = 'Berlin';
$Capital2 = 'Porto-Novo';
$Capital3 = 'Accra';
$Capital4 = 'London';
$Capital5 = 'Paris';
$Capital6 = 'Seoul';

$Countries = [$country1, $country2, $country3, $country4, $country5, $country6];
$Capitals = [$Capital1, $Capital2, $Capital3, $Capital4, $Capital5, $Capital6];

// Loops for Countries 
for($i=0; $i<count($Countries); $i++){
    echo "$Countries[$i] <br>" ;
}
echo '<br>';

foreach($Countries as $Country){
    echo $Country. '<br>';
}

echo '<br>';

$i =0;

while($i < count($Countries)){
    echo "$Countries[$i] <br>";
    $i++;
}

echo '<br>';

// Loops for Capitals 
for($i=0; $i<count($Capitals); $i++){
    echo "$Capitals[$i] <br>" ;
}
echo '<br>';

foreach($Capitals as $Capital){
    echo $Capital. '<br>';
}

echo '<br>';

$i =0;

while($i < count($Capitals)){
    echo "$Capitals[$i] <br>";
    $i++;
}

?>