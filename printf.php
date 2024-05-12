<?php
$fname = "Isaac";
$lname = "Newton";
$middname = "Nothing";

// printf("His name is %s %s", $fname, $lname);
// printf('His name is %1$s %2$s %3$s', $fname, $middname, $lname);

printf('His name is %2$s %1$s %3$s', $fname, $lname, $middname);
echo "\n";

printf("The binary Equivalent of %d is %b", 12, 12);
echo "\n";
printf('The binary Equivalent of %1$d is %1$b', 12);
echo "\n";


$n = 45.126;
printf("%.2f", $n);
echo "\n";


$m = 126;
$n = 27;
printf("%04d \n", $m);
printf("%04d", $n);
echo "\n";


$m = 126.5432;
$n = 27.154;
printf("%07.2f \n", $m);
printf("%07.2f", $n);

