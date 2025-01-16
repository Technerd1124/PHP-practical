<!-- 3 // Display the month name using a switch statement -->


<html>
    <body>
    <?php
// Define a month number
$monthNumber = 3; // You can change this number to test other months

switch ($monthNumber) {
    case 1:
        echo "January\n";
        break;
    case 2:
        echo "February\n";
        break;
    case 3:
        echo "March\n";
        break;
    case 4:
        echo "April\n";
        break;
    case 5:
        echo "May\n";
        break;
    case 6:
        echo "June\n";
        break;
    case 7:
        echo "July\n";
        break;
    case 8:
        echo "August\n";
        break;
    case 9:
        echo "September\n";
        break;
    case 10:
        echo "October\n";
        break;
    case 11:
        echo "November\n";
        break;
    case 12:
        echo "December\n";
        break;
    default:
        echo "Invalid month number.\n";
}
?>


    </body>
</html>