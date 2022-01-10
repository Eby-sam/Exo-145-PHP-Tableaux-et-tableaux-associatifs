<?php
$fruits = array("Apple", "Banana", "Orange");
$arrlength = count($fruits);
for($i = 0; $i < $arrlength; $i++) {
    echo $fruits[$i]."<br>";
}
echo $fruits[1]."<br>";

//Deuxieme ligne


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is ". $age["Ben"]." years old.<br><br>";

foreach($age as $x => $y) {
    echo "<br>Key=" . $x . ", Value=" . $y ;
}

echo "<br>";

//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
sort($colors);
print_r($colors);
echo "<br>";
rsort($colors);
print_r($colors);
echo "<br>";


// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach ($age as $key => $val){
    echo "$key : $val <br>";
}