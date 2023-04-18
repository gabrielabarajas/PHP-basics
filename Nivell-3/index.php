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

//Excercici 3
function deleteElement($arrayone, $element){
    unset($arrayone["$element"]);
    return $arrayone;
}
function normalizeArray($arr1){
    array_splice($arr1,1,1);
    return $arr1;
}

//Testing
$arrayTest = array(10,20,30,40,50);
print_r($arrayTest);
echo "<br/>";
$arrTestDelete = deleteElement($arrayTest,3);
print_r($arrTestDelete);
echo "<br/>";
$arrTestDelete = normalizeArray($arrayTest,1,1);
print_r($arrTestDelete);

?>
