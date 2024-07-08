<?php

// Single-line comment: This is a single-line comment
$x = 5; // Single-line comment: Assigning value 5 to variable $x
echo $x; // Single-line comment: Output the value of $x

/*
   Multi-line comment:
   This is a multi-line comment.
   It can span multiple lines and is useful for longer explanations or commenting out blocks of code.
*/
$y = 10; // Multi-line comment: Assigning value 10 to variable $y
echo $y; // Multi-line comment: Output the value of $y

/**
 * PHPDoc comment for function documentation.
 *
 * @param int $a The first number.
 * @param int $b The second number.
 * @return int The sum of $a and $b.
 */
function sum($a, $b) {
    return $a + $b;
}

// Usage:
$result = sum(5, 3); // Single-line comment: Calling the sum function to calculate the sum of 5 and 3
echo "Sum: " . $result; // Single-line comment: Output the result of the sum function

?>
