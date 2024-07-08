<?php
$per = 50; // Percentage value

// Check the grade based on the percentage value
if ($per >= 80 && $per <= 100) {
    echo "grade - AA"; // 80-100%: grade AA
} elseif ($per >= 60 && $per < 80) {
    echo "grade - A+"; // 60-79%: grade A+
} elseif ($per >= 50 && $per < 60) {
    echo "grade - A"; // 50-59%: grade A
} elseif ($per >= 40 && $per < 50) {
    echo "grade - B+"; // 40-49%: grade B+
} elseif ($per >= 30 && $per < 40) {
    echo "grade - B"; // 30-39%: grade B
} elseif ($per >= 0 && $per < 30) {
    echo "grade - F"; // 0-29%: grade F (fail)
} else {
    echo "Invalid percentage"; // For values outside 0-100
}
?>
