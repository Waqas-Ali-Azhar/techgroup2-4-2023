<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// assignment expression


//Initialization

$x = 1;
$y = 1;

$x = $x + $y;
// echo $x;

// echo "<br>";

$x = 1;
$y = 1;

$x *= $y;

// echo $x;



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
// echo "<br>";


// var_dump($unit_price);
// $quantity = 1;


$unit_price = 'a';

// echo "<br>";
// var_dump($unit_price);

$unit_price = 10.9;
$unit_price = 10.9;
// echo "<br>"

// var_dump($unit_price);

$fname = "Waqas";
$midname = "Ali";
$lastname = "Azhar";

// echo "<p>" . $fname . '  &nbsp;&nbsp;  ' . $midname . ' &nbsp;&nbsp;   ' . $lastname . "</p>";

// echo 10 . 9;

$numberOne = 29;
$numberTwo = 2;

for ($i = 0; $i < 25; ++$i) {
    echo "*";
    echo "<br>";
}


// $total = $unit_price * $quantity;
// echo "<br>";
// print_r($total);


/**
 * 
 * Please write a computer program that can caluculate values of 
 * N number of students where each student's Maths marks are given.
 * 
 * Provided that N is an integer whose values are
 *   0 < N < 10
 *   marks are 4,5,33,66,88,11,22,33,44,55
 * 
 *  Array: an array is a collection of memory cells where you store similar records
 *  in consecutive locations where arrays first element's address is 0 and last element's
 *  adress is Length - 1;
 */



$marks = array(4, 5, 33, 66, 88, 11, 22, 33, 44, 55);
$lengthOfArray = count($marks);

for ($i = 0; $i < $lengthOfArray; ++$i) {
    echo "Marks for Student " . $i . " are " . $marks[$i];
    echo "<br>";
}


$marks = array(array(30, 40), array(20, 45), array(90, 99), array(10, 20), array(11, 33), array(32, 47), array(31, 89), array(44, 54), array(55, 66), array(65, 87));
$lengthOfArray = count($marks);

for ($i = 0; $i < $lengthOfArray; ++$i) {
    echo "Marks for maths for Student " . $i . " are " . $marks[$i][0] . "       Marks for english Student " . $i . " are " . $marks[$i][1];
    echo "<br>";
}

print_r('loop is ended');




?>