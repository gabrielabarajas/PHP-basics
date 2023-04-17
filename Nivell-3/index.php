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
echo "<br/>";

$uno = "World    H    e       ll   o";
$array = stringToArray($uno);
print_r($array);
echo "<br/>";

// Excercici 2
function countTimesInArray($arr1){
    $resArray = array_count_values($arr1);
    return $resArray; 
}

// Testing
$unoArray = array("uno","dos","tres", 1,3,"tres","dos","tres", 1,2,);
$countArray = countTimesInArray($unoArray);
print_r($countArray);
echo "<br/>";
?>
