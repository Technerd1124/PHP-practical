<!-- //1. Write a program to make the use of logical operators. -->

<html>
    <body>
    <?php
$a = true;
$b = false;
$c = 10;
$d = 20;

echo "1. Logical AND (&&):\n";
if ($c > $d && $a) {
    echo "Both conditions are true.\n";
} else {
    echo "One or both conditions are false.\n";
}

// Logical OR (||)
echo "\n2. Logical OR (||):\n";
if ($c > $d || $b) {
    echo "At least one condition is true.\n";
} else {
    echo "Both conditions are false.\n";
}


echo "\n3. Logical XOR (xor):\n";
if ($a xor $b) {
    echo "Only one condition is true.\n"; // Output: Only one condition is true.
} else {
    echo "Both are true or both are false.\n";
}

// Logical NOT (!)
echo "\n4. Logical NOT (!):\n";
if (!$a) {
    echo "$a is false.\n";
} else {
    echo "$a is true.\n"; // Output: $a is true.
}
?>

    </body>
</html>
