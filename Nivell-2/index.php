<?php
//Exercici 1

function addInt($num1, $num2){
    if ($num1 === $num2){
        $res = 2*($num1+$num2);
    } else{
        $res = $num1+$num2;
    }
    return $res;
}

//Testing cases
$uno=1;
$dos= 2;
echo addInt($uno,$dos)."<br/>";

$uno=3;
$dos= 2;
echo addInt($uno,$dos)."<br/>";

$uno=2;
$dos= 2;
echo addInt($uno,$dos);
?>