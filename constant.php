<?php
/*
====
Constant
====
*/
define('PI',3.14159);

//This is wrong way
// echo "Value is PI = {PI}";

// This is right way
echo "value is PI = " . PI . "\n";
// echo PI;

// And
// echo constant('PI');

//And
$constant = "constant";
echo "Value is PI {$constant('PI')}";
