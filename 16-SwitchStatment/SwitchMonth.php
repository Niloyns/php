<?php
// Example with user input
$month = 2; // Month number (1 for January, 2 for February, etc.)

// Using switch statement to determine the number of days in a month
switch ($month) {
    // For months with 31 days, it prints "31 days".
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "31 days";
        break; // Exit the switch block
    //For months with 30 days, it prints "30 days".
    case 4:
    case 6:
    case 9:
    case 11:
        echo "30 days";
        break; // Exit the switch block
    //For February (case 2), it prints "28 or 29 days".
    case 2:
        echo "28 or 29 days";
        break; // Exit the switch block
    default:
        echo "Invalid month"; // Default case if none of the above cases match
}
?>
