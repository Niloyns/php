<?php
// Equal (==) - Checks if two values are equal. It performs type coercion if necessary.
$a = 5;
$b = 5;
var_dump($a == $b); // Output: bool(true)

// Identical (===) - Checks if two values are equal and of the same data type.
$a = 5;
$b = '5';
var_dump($a === $b); // Output: bool(false) (different data types)

// Not Equal (!= or <>) - Checks if two values are not equal.
$a = 5;
$b = 10;
var_dump($a != $b); // Output: bool(true)

// Not Identical (!==) - Checks if two values are not equal or not of the same data type.
$a = 5;
$b = '5';
var_dump($a !== $b); // Output: bool(true) (different data types)

// Greater Than (>) - Checks if the left operand is greater than the right operand.
$a = 10;
$b = 5;
var_dump($a > $b); // Output: bool(true)

// Less Than (<) - Checks if the left operand is less than the right operand.
$a = 5;
$b = 10;
var_dump($a < $b); // Output: bool(true)

// Greater Than or Equal To (>=) - Checks if the left operand is greater than or equal to the right operand.
$a = 10;
$b = 10;
var_dump($a >= $b); // Output: bool(true)

// Less Than or Equal To (<=) - Checks if the left operand is less than or equal to the right operand.
$a = 5;
$b = 10;
var_dump($a <= $b); // Output: bool(true)

// Spaceship (<=>) -  Performs three-way comparison between operands and returns -1, 0, or 1 based on the comparison result.
$a = 5;
$b = 10;
var_dump($a <=> $b); // Output: int(-1) ($a is less than $b)

$a = 10;
$b = 10;
var_dump($a <=> $b); // Output: int(0) ($a is equal to $b)

$a = 15;
$b = 10;
var_dump($a <=> $b); // Output: int(1) ($a is greater than $b)

?>
