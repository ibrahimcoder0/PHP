<?php

function printN($i)
{
  if ($i >= 10) {
    return;
  }
  echo $i . "\n";
  $i++;
  printN($i);
}

// printN(0);


// function printNumber($count, $end){
//   if($count>$end){
//     return;
//   }
//   echo $count . "\n";
//   $count++;
//   printNumber($count, $end);
// }
// printNumber(21, 37);



//recursive function //recursion
function printNumber($count, $end, $stepping=1){
  if($count>$end){
    return;
  }
  echo $count . "\n";
  $count+= $stepping;
  printNumber($count, $end, $stepping);
}
printNumber(21, 37,3);
