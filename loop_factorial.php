<?php

//6 = 6*5*4*3*2*1
$number = 6;
for ($i = $number, $factorial = 1; $i > 1; $i--) {
  $factorial = $factorial * $i;
}
printf("Factorial of %d is %d", $number, $factorial);
echo PHP_EOL;

for ($i = $number, $factorial = 1; $i > 1; $i--) {
  $factorial *= $i;
}
printf("Factorial of %d is %d", $number, $factorial);