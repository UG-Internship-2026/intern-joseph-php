<?php

$number = 100;
echo "Number: " . $number . PHP_EOL;
if ($number == 0) {
    echo "Zero";
} else if ($number > 0) {
    echo "Positive number".PHP_EOL;
} else {
    echo "Negative number".PHP_EOL;
}


if ($number % 2 == 0) {
    echo "Even number".PHP_EOL;
} else {
    echo "Odd number".PHP_EOL;
}


if ($number > 100) {
    echo "Greater than 100".PHP_EOL;
} else if ($number < 100) {
    echo "Not greater than 100".PHP_EOL;
} else {
    echo "Number is $number";
}

?>
