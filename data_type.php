<?php
/*
====
Var dump
printf
====
*/

/*
Integer int
Double / Float
Boolean
Null
String
Array
Object
Resource
 */

//Inteter int
// $age = 123;
//String
// $age = '1243';
//Null
// $age = null;
//Float or Double
// $age = 4.34564;
//Boolean true or false
// $age = true;
////
// var_dump($age);


/*
// This is not beter way
$name = "Earth";
$uname = strtoupper($name);
echo "We're living on $uname";
*/

// $name = "Earth";
// printf( "We're living on %s", $name);

/* 
//This is  beter way 
$fname = "Isaac";
$lname = "Newton";
printf("His %s Name Is %s %s", "Full", $fname, $lname);

echo "My
Name
is
{$fname}
Hayder
,
How are you?";
======
======
*/
/*
$planet1 = "Mercury";
$planet2 = "Jupiter";
// echo "The smallest planet is .$planet1. and the biggest planet is .$planet2. \n";
// echo "The smallest planet is {$planet1} and the biggest planet is { $planet2} \n";

//This is a best way
// printf("The smallest planet is %s and the biggets planet is %s %s ", $planet1, strtoupper("world"), $planet2);

printf("The smallest planet is %s and the biggets planet is %s %s ", $planet1, strtoupper("world"), $planet2);

*/
/*
$number = 1234;
$string = "Dhaka";
printf("This is post code %u in %s", $number, strtoupper($string));
 */


  $str1 = "Hello";
  $str2 = "Hello world!";
  printf("%'*8s", $str1);



/*
$num1 = 123456789;
$num2 = -123456789;
$char = 50; // The ASCII Character 50 is 2

// Note: The format value "%%" returns a percent sign
printf("%%b = %b <br>", $num1); // Binary number
printf("%%c = %c <br>", $char); // The ASCII Character
printf("%%d = %d <br>", $num1); // Signed decimal number
printf("%%d = %d <br>", $num2); // Signed decimal number
printf("%%e = %e <br>", $num1); // Scientific notation (lowercase)
printf("%%E = %E <br>", $num1); // Scientific notation (uppercase)
printf("%%u = %u <br>", $num1); // Unsigned decimal number (positive)
printf("%%u = %u <br>", $num2); // Unsigned decimal number (negative)
printf("%%f = %f <br>", $num1); // Floating-point number (local settings aware)
printf("%%F = %F <br>", $num1); // Floating-point number (not local settings aware)
printf("%%g = %g <br>", $num1); // Shorter of %e and %f
printf("%%G = %G <br>", $num1); // Shorter of %E and %f
printf("%%o = %o <br>", $num1); // Octal number
printf("%%s = %s <br>", $num1); // String
printf("%%x = %x <br>", $num1); // Hexadecimal number (lowercase)
printf("%%X = %X <br>", $num1); // Hexadecimal number (uppercase)
printf("%%+d = %+d <br>", $num1); // Sign specifier (positive)
printf("%%+d = %+d <br>", $num2); // Sign specifier (negative)

*/




