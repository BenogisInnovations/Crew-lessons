<?php
$country = ["Germany","Benin","Ghana","England","France","Korea"];
$capital = ['Berlin','Accra','London','Paris','Seoul'];
for($i = 0; $i < count($country); $i++) {
     echo "I Love $country[$i]. <br>";
     }"<p>";
     
     
     for($i = 0; $i < count($capital); $i++) {
        echo "$capital[$i] is my capital.<br>";
        }'<p>';
        
       
       
        foreach($country as $country){
                    echo "$country ".'<br>';
        }
        foreach($capital as $capital){
                echo "$capital ".'<br>';
    }
   
    $country = ['Germany','Benin','Ghana','England','France','Korea'];
    $capital = ['Berlin','Accra','London','Paris','Seoul'];
   
    $i = 0;
    $sumofarray = count($country);

    while ($i < $sumofarray) {
    echo $country[$i]. "<br>";
    $i++;
}
$i = 0;
$sumofarray = count($capital);

while ($i < $sumofarray) {
echo $capital[$i]. "<br>";
$i++;
}

?>