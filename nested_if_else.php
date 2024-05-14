<?php
$nested1 = true;
$nested2 = true;
$nested3 = false;

if ($nested1) {
  if ($nested2) {
    if ($nested3) {
      echo "Hello";
    } else {
      echo "no 1";
    }
  } else {
    echo "no 2";
  }
} else {
  echo "no 3";
}
echo "\n";

if ($nested1 && $nested2 && $nested3) {
  echo "Hello";
} elseif ($nested1 && $nested2) {
  echo "no 1";
} elseif ($nested1) {
  echo "no 2";
} else {
  echo "no 3";
}