<?php

//Ternary Operator

$n = 12;

if(12 == $n){
  echo "Twelve";
}elseif(10 == $n){
  echo "Ten";
}else{
  echo "A number";
}

echo "\n";

$numberInword = 12 == $n ? "Twelve" : "A Number";
echo $numberInword;

echo "\n";

// $number = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten": "A Number";
// echo $number;

// var_dump($number);

// echo "\n";


if($n % 2 == 0){
  echo "Even Number";
}else{
  echo "Odd Number";
}

echo "\n";


$result = $n % 2 == 0 ? "Even Number" : "Odd Number";
echo $result;






