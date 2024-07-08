<?php
// Assignment Operator (=)

// Assigning a value to a variable
$a = 5;
echo "Initial value of \$a: $a\n"; // Output: Initial value of $a: 5

// Adding a value to an existing variable
$a += 3; // Equivalent to $a = $a + 3
echo "After adding 3, \$a: $a\n"; // Output: After adding 3, $a: 8

// Subtracting a value from an existing variable
$a -= 2; // Equivalent to $a = $a - 2
echo "After subtracting 2, \$a: $a\n"; // Output: After subtracting 2, $a: 6

// Multiplying an existing variable by a value
$a *= 4; // Equivalent to $a = $a * 4
echo "After multiplying by 4, \$a: $a\n"; // Output: After multiplying by 4, $a: 24

// Dividing an existing variable by a value
$a /= 3; // Equivalent to $a = $a / 3
echo "After dividing by 3, \$a: $a\n"; // Output: After dividing by 3, $a: 8

// Using modulus to get remainder of division
$a %= 5; // Equivalent to $a = $a % 5
echo "Modulus with 5, \$a: $a\n"; // Output: Modulus with 5, $a: 3

// Concatenating a string with an existing string variable
$str = "Hello";
$str .= " World"; // Equivalent to $str = $str . " World"
echo "Concatenated string, \$str: $str\n"; // Output: Concatenated string, $str: Hello World

// Exponentiation (Power)

$a = 5;
$b = 2;

// Calculating $a raised to the power of $b
$result = $a ** $b;

echo "$a raised to the power of $b is: $result\n"; // Output: 5 raised to the power of 2 is: 25
?>
