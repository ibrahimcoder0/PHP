<?php

//Condition Switch case

$n = 12;
$r = $n % 2;

switch($r){
  case 0:
    echo "$n is an even number \n";
    break;
  default:
    echo "$n is an odd number \n";
}


$color = "black";
/*
switch ($color){
  case 'red':
    echo "$color is our favarite color";
    break;
  case 'green':
    echo "$color is our favarite color";
    break;
  case 'blue':
    echo "$color is not our favarite color";
    break;
}
*/


switch ($color){
  case 'red':
  case 'green':
    echo ucwords($color). " is our favarite color";
    break;
  case 'blue':
    echo ucwords($color) ." is not our favarite color";
    break;
  default:
    echo ucwords($color)." This color is not found";
}