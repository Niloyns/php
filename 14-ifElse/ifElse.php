<?php
// Example 1: Simple if statement
$a = 10;
$b = 5;
//Checks a condition and executes the code block if the condition is true.
if ($a > $b) {
    echo "Example 1: \$a is greater than \$b\n"; // Output: Example 1: $a is greater than $b
}

// Example 2: if-else statement
$a = 3;
$b = 5;
//Checks a condition and executes the code block if the condition is true; otherwise, it executes the code block inside else.
if ($a > $b) {
    echo "Example 2: \$a is greater than \$b\n";
} else {
    echo "Example 2: \$a is not greater than \$b\n"; // Output: Example 2: $a is not greater than $b
}

// Example 3: if-else if-else statement
$a = 3;
$b = 3;
//Checks multiple conditions in sequence and executes the corresponding code block for the first true condition. If none of the conditions are true, it executes the code block inside else.
if ($a > $b) {
    echo "Example 3: \$a is greater than \$b\n";
} elseif ($a < $b) {
    echo "Example 3: \$a is less than \$b\n";
} else {
    echo "Example 3: \$a is equal to \$b\n"; // Output: Example 3: $a is equal to $b
}

// Example 4: Nested if statement
$a = 10;
$b = 5;
$c = 15;
//An if statement inside another if statement to check multiple levels of conditions.
if ($a > $b) {
    if ($c > $a) {
        echo "Example 4: \$c is greater than \$a\n"; // Output: Example 4: $c is greater than $a
    }
}

// Example 5: if-else statement using alternative syntax
$d = 20;
$e = 15;
//Uses if and else with a colon (:) and endif; for ending the if block, often used in templating.
if ($d > $e):
    echo "Example 5: \$d is greater than \$e\n"; // Output: Example 5: $d is greater than $e
else:
    echo "Example 5: \$d is not greater than \$e\n";
endif;
?>
