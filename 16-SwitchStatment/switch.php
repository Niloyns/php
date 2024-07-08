<?php
$day = 3; // Day of the week (1 for Monday, 2 for Tuesday, etc.)

// Using switch statement to determine the day of the week
switch ($day) {
    case 1:
        echo "Monday";
        break; // Exit the switch block
    case 2:
        echo "Tuesday";
        break; // Exit the switch block
    case 3:
        echo "Wednesday";
        break; // Exit the switch block
    case 4:
        echo "Thursday";
        break; // Exit the switch block
    case 5:
        echo "Friday";
        break; // Exit the switch block
    case 6:
        echo "Saturday";
        break; // Exit the switch block
    case 7:
        echo "Sunday";
        break; // Exit the switch block
    default:
        echo "Invalid day"; // Default case if none of the above cases match
}
?>
