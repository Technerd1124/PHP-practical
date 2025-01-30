<!DOCTYPE html>
<html>
<head>
    <title>PHP Math Functions</title>
</head>
<body>
    <h1>PHP Math Functions Example</h1>
    <?php
    // Define some numbers
    $num1 = -12.7;
    $num2 = 4.2;

    // Absolute value
    echo "<p>Absolute value of $num1: " . abs($num1) . "</p>";

    // Round to the nearest integer
    echo "<p>Round $num2: " . round($num2) . "</p>";

    // Ceiling value
    echo "<p>Ceiling of $num2: " . ceil($num2) . "</p>";

    // Floor value
    echo "<p>Floor of $num2: " . floor($num2) . "</p>";

    // Square root
    echo "<p>Square root of 16: " . sqrt(16) . "</p>";

    // Exponentiation
    echo "<p>2 raised to the power 3: " . pow(2, 3) . "</p>";

    // Random number
    echo "<p>Random number between 1 and 100: " . rand(1, 100) . "</p>";

    // Maximum and Minimum
    echo "<p>Maximum of (3, 9, 5, 7): " . max(3, 9, 5, 7) . "</p>";
    echo "<p>Minimum of (3, 9, 5, 7): " . min(3, 9, 5, 7) . "</p>";
    ?>
</body>
</html>
