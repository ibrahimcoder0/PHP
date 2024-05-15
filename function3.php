<?php

// function sum($x, $y, $z)
// {
//   return $x + $y + $z;
// }
// echo sum(5.3, 6, 7);


// function sum(int $x, int $y, int $z):int
// {
//   // return "abcd";
//   return $x + $y + $z;
// }
// echo sum(5.3, 6, 7);


// function sum($x = 0, $y = 0, $z = 0)
// {
//   return $x + $y + $z;
// }
// echo sum(5, 6);


// function sum(int ...$numbers)
// {
//   $result = 0;
//   for ($i = 0; $i < count($numbers); $i++) {
//     $result += $numbers[$i];
//   }
//   return $result;
// }
// echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9);


function sum($x, $y, int ...$numbers)
{
  $result = 0;
  for ($i = 0; $i < count($numbers); $i++) {
    $result += $numbers[$i];
  }
  return $result;
}
echo sum(8, 9, 1, 3, 4);