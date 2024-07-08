<?php
/** Normal Variable */
$x = 22 . "<br>"; // Assigning value 22 to variable $x
$x = 55 . "<br>"; // Overriding the value of $x with 55
echo $x; // Output: 55

/** Constant Variable */
/** 
 * Syntax: define(name, value, case-insensitive);
 * Define a constant variable named 'num' with a value of 500.
 * Constants are case-insensitive by default in PHP.
 */
define("num", 500);

// define("num", 999); // This line would cause an error, constants cannot be redefined

// Output the value of the constant 'num'
echo num; // Output: 500
?>
