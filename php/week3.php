<?php
//deel1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

$myArray[]='motor';

// Loop through colors array
foreach($myArray as $value){
    echo $value . "<br>";
}

//deel2
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

$optellen= count ($myArray);

echo "Het array heeft $optellen elementen.";

$myArray[]='motor';

$optellen= count ($myArray);

echo "Het array heeft $optellen elementen.";

//deel3
//regel2 = "bar"
//regel5 = 4
//regel8 = "toyota"
//regel9 = 3
//regel12 = 5
//regel10 = 4

//deel4
$cijfersPHP =[4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP),2);
echo "<br>";
echo $gemiddelde;

//deel4 B
//Ik denk dat het beter is om de regels samen te voegen, omdat het makkelijker is om de uitkomst te krijgen

?>