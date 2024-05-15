<?php
//null coalesce operator

$default_lat = 23.9;
$default_lon = 90.8;

// $user_lat = 12.9;
$user_lat;

// $lat = isset($user_lat) ? $user_lat : $default_lat; // ternary operator

$lat = $user_lat ?? $default_lat; //null coalesce operator

echo $lat;


// if(isset($user_lat)){
//   $lat = $user_lat;
// }else{
//   $lat = $default_lat;
// }