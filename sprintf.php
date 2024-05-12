<?php
$fname = "Isaac";
$lname = "Newton";

// printf("His name is %s %s", $fname, $lname);
$output = sprintf("His name is %s %s", $fname, $lname);
echo $output;
echo "\n";
echo strtoupper( $output);
echo "\n";

$name = "Imran";
$name2 = "Islam";

$sprintf = sprintf("His name is %s %s ", $name2, $name);
echo $sprintf;