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
echo addInt($uno,$dos)."<br/>";

//Exercici 2

// function charExchange($str1){
//     if (strlen($str1) == 0){
//         echo "Cannot execute function: Empty string.";
//     }else{
//         $first = substr($str1,1);
//         $last = substr($str1,-1);
//         $str1[0] = $last;
//         $str1[strlen($str1)-1] = $first;
//         echo $str1."\n";
//     }
// }

function charExchangeAgain($str1){
    if (strlen($str1) == 0){
        echo "Cannot execute function: Empty string." ."<br/>";
    }else{
        $first = $str1[0];
        $last = $str1[strlen($str1)-1];
        $str1[0] = $last;
        $str1[strlen($str1)-1] = $first;
        echo $str1."<br/>";
    }
}

//Testing cases
$onestr = "wxyz";
charExchangeAgain($onestr);

$onestr = "";
charExchangeAgain($onestr);

$onestr = "a";
charExchangeAgain($onestr);

$onestr = "ab";
charExchangeAgain($onestr);

?>