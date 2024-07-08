<?php

// Single-line comment: This is a single-line comment

/*
   Multi-line comment:
   This is a multi-line comment.
   It can span multiple lines and is useful for longer explanations or commenting out blocks of code.
*/


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
