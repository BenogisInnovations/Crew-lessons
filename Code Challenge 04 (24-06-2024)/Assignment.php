<?php

 // Countries || ✅  PERFECT
 $country1 = 'Germany';
 $country2 = 'Benin';
 $country3 = 'Ghana';
 $country4 = 'England';
 $country5 = 'France';
 $country6 = 'Korea';

 // Capitals || ✅ PERFECT
$Capital1 = 'Berlin';
$Capital2 = 'Porto-Novo';
$Capital3 = 'Accra';
$Capital4 = 'London';
$Capital5 = 'Paris';
$Capital6 = 'Seoul';

# camel case should begin with small letter 👍
$Countries = [$country1, $country2, $country3, $country4, $country5, $country6]; # ✅ PERFECT
$Capitals = [$Capital1, $Capital2, $Capital3, $Capital4, $Capital5, $Capital6]; # ✅ PERFECT

// Loops for Countries # ✅ PERFECT
for($i=0; $i<count($Countries); $i++){
    echo "$Countries[$i] <br>" ;
}
echo '<br>'; # ✅ PERFECT (optional, you could also use symbols to show seperator(s))

foreach($Countries as $Country){
    echo $Country. '<br>';
}

echo '<br>'; # ✅ PERFECT

$i =0;

while($i < count($Countries)){
    echo "$Countries[$i] <br>";
    $i++;
}

echo '<br>'; # ✅ PERFECT
 
// Loops for Capitals  # ✅ PERFECT
for($i=0; $i<count($Capitals); $i++){
    echo "$Capitals[$i] <br>" ;
}
echo '<br>'; # ✅ PERFECT

foreach($Capitals as $Capital){
    echo $Capital. '<br>';
} # ✅ PERFECT

echo '<br>';

$i =0;

while($i < count($Capitals)){
    echo "$Capitals[$i] <br>";
    $i++;
} # ✅ PERFECT


/* ⭐⭐⭐⭐⭐ - EXCELLENT - ⭐⭐⭐⭐⭐*/
?>