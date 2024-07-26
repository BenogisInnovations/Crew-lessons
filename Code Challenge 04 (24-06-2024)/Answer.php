<?php

# INDENTATION!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

# ✅ PERFECT
# No comment ❌
# array names plural 
$country = ["Germany","Benin","Ghana","England","France","Korea"]; 
$capital = ['Berlin','Accra','London','Paris','Seoul'];
// For loop
for($i = 0; $i < count($country); $i++) {
    # ✅ PERFECT : Do what u are instructed do | indentation
    echo "$country[$i]. <br>"; 
}
"<p>"; # echo, close tags, you could have use visible symbols
//# ✅ PERFECT
     
     # ✅ PERFECT : Do what u are instructed do | indentation
for($i = 0; $i < count($capital); $i++) {
        echo "$capital[$i] is my capital.<br>";
}'<p>';
         # echo, close tags, you could have use visible symbols
        # ✅ PERFECT
        
       
// Foreach loop
foreach($country as $country){
    echo "$country ".'<br>';
}
        # indentation
foreach($capital as $capital){
    echo "$capital ".'<br>';
}
//While loop
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
# Pending scoring
?>