<?php
//Countries In An Array
$country1 = 'Germany';
$country2 = 'Benin';
$country3 = 'Ghana';
$country4 = 'England';
$country5 = 'France';
$country6 = 'Korea';

$countries=['Germany','Benin','Ghana','England','France','Korea' ];

//Capitals In An Array
$Capital1 = 'Berlin';
$Capital2 = 'Porto-Novo';
$Capital3 = 'Accra';
$Capital4 = 'London';
$Capital5 = 'Paris';
$Capital6 = 'Seoul';

$capitals=['Berlin','Porto-Novo','Accra','London','Paris','Seoul'];

//using for loop to display each array
for($i = 0; $i < count($countries); $i++) {
      echo "$countries[$i] <br>";
    }
echo "<br>";
for($i = 0; $i < count($capitals); $i++) {
        echo "$capitals[$i] <br>";
      }
echo "<br>";

//using for each loop to display each array
foreach($countries as $country){
  echo $country.'<br>';
  }
  echo "<br>";

  foreach($capitals as $capital){
    echo $capital.'<br>';
    }
  echo "<br>";
// using while loop to run each array
 $i = 0;
while ($i< count($countries)) {
 echo $countries[$i];
 $i++;
 }

echo "<br>";

 $i = 0;
 while ($i< count($capitals))
 echo "<br>"; {
  echo $capitals[$i];
  $i++;
  }