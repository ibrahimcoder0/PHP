<?php

/**
 * Determines if the argument is even or odd
 * Summary of evenOrOdd
 * @param mixed $n
 * @return bool
 */

// function evenOrOdd($n) //parameter
// {
//   if ($n % 2 == 0) {
//     return true;
//   } else {
//     return false;
//   }
// }

// function isEven($n)
// {
//   if ($n % 2 == 0) {
//     return true;
//   }
//   return false;
// }

// $x = 12;
// if (evenOrOdd($x)) { //argument
//   echo "$x is and even number";
// } else {
//   echo "$x is an odd number";
// }

function factorial($n)
{
  if (gettype($n) != "integer") {
    return "invalid";
  }
  $result = 1;
  for ($i = $n; $i > 1; $i--) {
    $result *= $i;
  }
  return $result;
}

$x = "abcd";
$x = 5;
echo "Factorial of {$x} is " . factorial($x);




// function factorial($n)
// {
//   if ($n <= 1) {
//     return 1;
//   }
//   return $n * factorial($n - 1);
// }
// echo factorial(6);