<?php
$n = 15;

if ($n % 2 == 0) {
  echo "Even Number";
} else {
  echo "Odd Number";
}

echo PHP_EOL;

if ($n % 2 == 0):
  echo "Even Number";
  echo PHP_EOL;
  echo "Some Text";
else:
  echo "Odd Number";
  echo PHP_EOL;
  echo "Some Text ++";
endif;

echo PHP_EOL;

switch ($n % 2 == 0):
  case 0:
    echo "Even number";
    break;
  default:
    echo "Odd number";
endswitch;


echo PHP_EOL;

if ($n % 2 == 0):
  ?>
  Even Number
  Some Text
  <?php
else:
  ?>
  Odd Number
  Some Text ++
  <?php
endif;