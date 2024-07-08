<?php
    /**
     * Arithmetic operators in PHP work with numeric values, including integers and floats.
     */

    $a = 5;
    $b = 2.5;

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
    echo "Exponentiation: \$a ** \$b = $h\n"; // Prints 55.901699437 (5 raised to the power of 2)
?>
