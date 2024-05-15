<?php


// for ($i = 0; $i < 10; $i++) {
//   echo $i;
//   echo PHP_EOL;
//   if ($i == 6) {
//     break;
//   }
// }

// for ($i = 20; $i < 40; $i++) {
//   if ($i % 15 == 0) {
//     echo $i;
//     echo PHP_EOL;
//     break;
//   }
// }

// for ($i = 20; $i < 40; $i++) {
//   if ($i < 30) {
//     continue;
//   }
//   echo $i;
//   echo PHP_EOL;
// }

for ($i = 20; $i < 40; $i++) {
  if ($i < 30) {
    goto a;
  }
  echo $i;
  echo PHP_EOL;

  a: '';
}