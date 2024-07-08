<?php
// Define variables with different data types
$ver0 = "Niloy"; // String
$ver1 = "22"; // String
$ver2 = 25; // Integer
$ver3 = 21.5; // Float
$ver4 = true; // Boolean (true = 1, false = 0)
$ver5 = array("a", "b", "c"); // Array
// $ver6 = new MyClass(); // Object (commented out as MyClass is not defined)
$ver7 = null; // Null

// Output each variable with its type and value

echo "String (ver0): " . $ver0 . " - Type: " . gettype($ver0) . "<br>"; // Output: Niloy - Type: string
echo "String (ver1): " . $ver1 . " - Type: " . gettype($ver1) . "<br>"; // Output: 22 - Type: string
echo "Integer (ver2): " . $ver2 . " - Type: " . gettype($ver2) . "<br>"; // Output: 25 - Type: integer
echo "Float (ver3): " . $ver3 . " - Type: " . gettype($ver3) . "<br>"; // Output: 21.5 - Type: double (float)
echo "Boolean (ver4): " . $ver4 . " - Type: " . gettype($ver4) . "<br>"; // Output: 1 - Type: boolean
echo "Array (ver5): ";
var_dump($ver5); // Output: array(3) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" }
echo " - Type: " . gettype($ver5) . "<br>";
echo "Null (ver7): " . $ver7 . " - Type: " . gettype($ver7) . "<br>"; // Output:  - Type: NULL
?>
