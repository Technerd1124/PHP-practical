<html>
    <body>
    <?php
// Defining variables for comparison
$a = 5;
$b = "5";
$c = 10;
$d = 3;
$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("b" => "banana", "a" => "apple");

// 1. Equal (==)
echo "1. Equal (==):\n";
if ($a == $b) {
    echo "$a is equal to $b\n";
} else {
    echo "$a is not equal to $b\n";
}
// 2. Identical (===)
echo "\n2. Identical (===):\n";
if ($a === $b) {
    echo "$a is identical to $b\n";
} else {
    echo "$a is not identical to $b\n";
}

// 3. Not Equal (!=)
echo "\n3. Not Equal (!=):\n";
if ($a != $c) {
    echo "$a is not equal to $c\n";
} else {
    echo "$a is equal to $c\n";
}

// 4. Not Identical (!==)
echo "\n4. Not Identical (!==):\n";
if ($a !== $b) {
    echo "$a is not identical to $b\n";
} else {
    echo "$a is identical to $b\n";
}

// 5. Greater Than (>)
echo "\n5. Greater Than (>):\n";
if ($a > $d) {
    echo "$a is greater than $d\n";
} else {
    echo "$a is not greater than $d\n";
}

// 6. Less Than (<)
echo "\n6. Less Than (<):\n";
if ($d < $c) {
    echo "$d is less than $c\n";
} else {
    echo "$d is not less than $c\n";
}

// 7. Greater Than or Equal To (>=)
echo "\n7. Greater Than or Equal To (>=):\n";
if ($a >= $b) {
    echo "$a is greater than or equal to $b\n";
} else {
    echo "$a is not greater than or equal to $b\n";
}

// 8. Less Than or Equal To (<=)
echo "\n8. Less Than or Equal To (<=):\n";
if ($d <= $c) {
    echo "$d is less than or equal to $c\n";
} else {
    echo "$d is not less than or equal to $c\n";
}

// 9. Spaceship Operator (<=>)
echo "\n9. Spaceship Operator (<=>):\n";
echo $a <=> $c; // Output will be -1, 0, or 1 based on comparison

// 10. Equality in Arrays (==)
echo "\n10. Equality in Arrays (==):\n";
if ($array1 == $array2) {
    echo "Arrays are equal\n";
} else {
    echo "Arrays are not equal\n";
}
?>

    </body>
</html>