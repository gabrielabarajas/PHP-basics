<?php
// Excercici 1
function stringToArray($str1){
    $res = str_replace(' ','',$str1);
    $res = str_split($res);
    return $res;
}

// Testing
$uno = "Hello World";
$array = stringToArray($uno);
print_r($array);
echo "\n";

$uno = "World    H    e       ll   o";
$array = stringToArray($uno);
print_r($array);
?>