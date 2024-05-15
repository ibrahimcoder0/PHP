<?php

$everyold = 0;
$old = 1;
$new = 1;
for ($i = 0; $i < 10; $i++) {
  echo $everyold . " ";
  $old = $new;
  $new = $old + $everyold;
  $everyold = $old;
}
