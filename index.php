<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// assignment expression


//Initialization

$x = 1;
$y = 1;

$x = $x + $y;
echo $x;

echo "<br>";

$x = 1;
$y = 1;

$x *= $y;

echo $x;
exit;


/*
variable : a container that can store some value that is stored at RAM and that is changable
Data types:
premitiv / bultin data types
integer  eg. 0 1  2  3  4 
float    eg  9.9  10.34 24.25
double       10.99
charcter  'a' 'b' 'c'  'd'  '1'  '9'
bool       True 1   False 0   
string     'waqas'  "waqas"
array
PHP is a loosely typed language:
*/

$unit_price = 16;
echo "<br>";


var_dump($unit_price);
// $quantity = 1;


$unit_price = 'a';

echo "<br>";
var_dump($unit_price);

$unit_price = 10.9;
$unit_price = 10.9;
// echo "<br>"

var_dump($unit_price);

$fname = "Waqas";
$midname = "Ali";
$lastname = "Azhar";

echo "<p>" . $fname . '  &nbsp;&nbsp;  ' . $midname . ' &nbsp;&nbsp;   ' . $lastname . "</p>";

echo 10 . 9;




// $total = $unit_price * $quantity;
// echo "<br>";
// print_r($total);

?>