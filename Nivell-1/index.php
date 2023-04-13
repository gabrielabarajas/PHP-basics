<?php

//Exercici 1
$varInteger = 10;
$varDouble = 2.5;
$varString = "Gabriela";
$varBoolean = true;

echo "Integer:  ". $varInteger."<br/>";
echo "Double:  ". $varDouble."<br/>";
echo "String:   ". $varString."<br/>";
echo "Boolean:   ".$varBoolean."<br/>";

$resBool = ($varBoolean == 1)?"true":"false";
echo "Boolean:   ".$resBool."<br/>";

//Exercici 2
$message = "Hello World";
echo $message."<br/>";

echo strtoupper($message)."<br/>";

echo strlen($message)."<br/>";

echo strrev($message)."<br/>";

$message2 = " Aquest és el curs de PHP ";

echo $message.$message2."<br/>";

//Exercici 3
define("name", "Gabriela");
echo "<h1>".name."</h1>"."<br/>";

//Exercici 4
$X= 10;
$Y= 20;

$N = 4.5;
$M = 3.5;

echo "X: ".$X."<br/>";
echo "Y: ".$Y."<br/>";

echo "suma (X+Y): ".$X+$Y."<br/>";
echo "resta (X-Y): ".$X-$Y."<br/>";
echo "producte (X*Y): ".$X*$Y."<br/>";
echo "módul: (X%Y)".$X%$Y."<br/>";

echo "N: ".$N."<br/>";
echo "M: ".$M."<br/>";

echo "suma (N+M): ".$N+$M."<br/>";
echo "resta (N-M): ".$N-$M."<br/>";
echo "producte (N*M): ".$N*$M."<br/>";
echo "módul: (N%M)".$N%$M."<br/>";

echo "Doble de X: ".($X*2)."<br/>";
echo "Doble de Y: ".($Y*2)."<br/>";
echo "Doble de N: ".($N*2)."<br/>";
echo "Doble de M: ".($M*2)."<br/>";

echo "La suma de totes les varables: ".$Y+$Y+$N+$M."<br/>";
echo "El producte de totes les varables: ".$Y*$Y*$N*$M."<br/>";

?>