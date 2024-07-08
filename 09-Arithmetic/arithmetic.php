<?php
/**
 * Arithmetic operators in PHP work with numeric values, including integers and floats.
 */

$a = 5;
$b = 2.5;
$c = 10;

// Addition
$c = $a + $b; 
echo "Addition: \$a + \$b = $c\n"; // Prints 7.5

// Subtraction
$d = $a - $b;
echo "Subtraction: \$a - \$b = $d\n"; // Prints 2.5

// Multiplication
$e = $a * $b;
echo "Multiplication: \$a * \$b = $e\n"; // Prints 12.5

// Division
$f = $a / $b;
echo "Division: \$a / \$b = $f\n"; // Prints 2

// Modulus
$g = $a % $b;
echo "Modulus: \$a % \$b = $g\n"; // Prints 0 (since 5 % 2.5 results in 0)

// Exponentiation (power)
$h = $a ** 2;
echo "Exponentiation: \$a ** 2 = $h\n"; // Prints 25 (5 raised to the power of 2)

// Increment operators
$c++;
echo "Increment postfix: \$c++ = $c\n"; // Prints 11 (after adding 1 to $c)

++$c;
echo "Increment prefix: ++\$c = $c\n"; // Prints 12 (adding 1 to $c before using its value)

// Decrement operators
$c--;
echo "Decrement postfix: \$c-- = $c\n"; // Prints 11 (after subtracting 1 from $c)

--$c;
echo "Decrement prefix: --\$c = $c\n"; // Prints 10 (subtracting 1 from $c before using its value)

// Additional example for clarity
$x = $a + $b * 2;
echo "Example 1: \$x = \$a + \$b * 2 = $x\n"; // Prints 10 (5 + 2.5 * 2)

$y = ($a + $b) * 2;
echo "Example 2: \$y = (\$a + \$b) * 2 = $y\n"; // Prints 15 ( (5 + 2.5) * 2 )

?>
