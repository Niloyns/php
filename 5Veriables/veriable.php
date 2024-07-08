<?php
    // Define a variable with a string value that includes an HTML break tag
    $name = "Niloy<br>"; 

    // Define a variable with an integer value
    $num = 1998; 

    // Override the previous integer value with a new integer value
    $num = 2000; 

    // Output the value of the variable $name
    echo $name;  // Output: Niloy

    // Output the value of the variable $name again
    echo $name;  // Output: Niloy

    // Output the value of the variable $name a third time
    echo $name;  // Output: Niloy

    // Concatenate and output a string with HTML tags and the value of the variable $name
    echo "<h1> name -" . $name . "</h1>"; // Output: <h1> name -Niloy<br></h1>

    // Output the value of the variable $num
    echo $num; // Output: 2000
?>
