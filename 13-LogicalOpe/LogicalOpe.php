<?php
/** we can use if condiction */

// Logical AND (&&) - True if both operands are true
$a = true;
$b = false;
$result = $a && $b; 
var_dump($result); // Output: bool(false) (since $b is false)

// Logical OR (||) - True if at least one of the operands is true
$a = true;
$b = false;
$result = $a || $b;
var_dump($result); // Output: bool(true) (since $a is true)

// Logical NOT (!) - True if the operand is false, and vice versa
$a = true;
$result = !$a; 
var_dump($result); // Output: bool(false) (since $a is true)

// Logical AND (and) - Same as &&
$a = true;
$b = true;
$result = $a and $b;
var_dump($result); // Output: bool(true) (since both $a and $b are true)

// Logical OR (or) - Same as ||
$a = false;
$b = true;
$result = $a or $b;
var_dump($result); // Output: bool(true) (since $b is true)

// Logical XOR (exclusive OR) - True if either $a or $b is true, but not both
$a = true;
$b = false;
$result = $a xor $b; 
var_dump($result); // Output: bool(true) (since only one of $a or $b is true)

$a = true;
$b = true;
$result = $a xor $b; 
var_dump($result); // Output: bool(false) (since both $a and $b are true)
?>
