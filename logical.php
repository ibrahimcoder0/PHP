<?php
//Logical Operators
//=================
/*
    == 2 ta soman ki na check kora hoy
    != 2 ta not equal to ki na
    >  greater then 
    <  less then
    >= greater then equal to 
    <= lass then equal to
    && this is (and)
 
 */


/*
$n = 13;
if($n % 2==0){
  echo "$n is an even number";
}else{
  echo "$n is a odd number";
}
*/

/*
$n = 13;
if($n > 10){
  echo "$n is greater then 10";
}
*/

/*
$m = 12;
$n = 13;
if($m != $n){
  echo "M is not equal to N";
}
*/


/*
$alam = 100;
$rahim = 110;

if($alam == $rahim){
  echo "Alam and Rahim has same amount of money";
}elseif($alam>$rahim){
  echo "Alam has more money than Rahim";
}elseif($alam<$rahim){
  echo "Alam has less money then Rahim";
}elseif($alam>=$rahim){
  echo "Alam has same or more money than Rahim";
}
*/

/*
$age = 12;
if($age >= 13 && $age <= 19){
  echo "This Person is a teenager";
}else{
  echo "This person is not teenager";
}
*/


/*
$food = "apple";
if("tuna" == $food){
  echo "It has vitamin D";
}else{
  echo "We don't know if it contains vitamin D";
}
*/

$food = "oringe";
if ("tuna" == $food || "salmon" == $food) {
  echo "It has vitamin D";
} elseif("apple" == $food){
  echo "Apple does't contain vitamin D";
}else{
  echo "We don't know if it contains vitamin D";
}


