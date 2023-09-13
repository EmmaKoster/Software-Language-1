<!DOCTYPE html>
<html>
<head>


</head>
<body>
<?php
// Developer: Emma Koster

/** 
 * Define variables
 * String, 'Hallo world'
 * Boolean, true/false
 * Integer, 1 10
 * Float, 1.10
 * array, ['Emma', 'Pedro',]
 * date 06/09/2023
 */

 // Variable
// String
$name = "Emma";

$Title = " <br> Opdracht week 1";
echo $Title;

$currentdate = date("d-m-Y");
echo "<br>Vandaag is het: " . $currentdate . "<br>";

//boolean
$isMarried = false;

if( $isMarried ) {
   echo ucfirst($name) . " is getrouwd? Ja<br>";
} else {
   echo ucfirst($name) . " is getrouwd? Nee<br>";
}
echo $name . " is getrouwd " . $isMarried . "<br>";

//Integer - geheel getal
//korte versie

$age = "20";
echo $name . " is hoe oud? " . $age < 50 ? ". Het eind is in de buurt" : "Het einde is om de hoek";

//Fleat - pi (oppervlakte cirkel)
$pi = 3.14;

$cirkelDiameter = 10;
$oppervlakte = $pi * $cirkelDiameter;

echo "<br> $oppervlakte"; 

//array

$programminglanguages = [
   "HTML",
   "CSS",
   "JavaScript",
   "php",
   "C#",
   "Python",
   "Nodejs",
   "Vue",
   "React"
];

echo "<br> Aantal programmeertalen: " .count($programminglanguages);

?>

</body>
</html>