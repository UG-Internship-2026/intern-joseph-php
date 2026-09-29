<?php

$studentName = "Joseph Amuasi";
$assignment = 80;
$midSemester = 66;
$examination = 82;

if (
    $assignment < 0 || $assignment > 100 ||
    $midSemester < 0 || $midSemester > 100 ||
    $examination < 0 || $examination > 100
) {
    echo "Invalid score entered.";
} else {
    $total = $assignment + $midSemester + $examination;
    $average = $total / 3;


    if ($average >= 70) {
        $grade = "A";
    } elseif ($average >= 60) {
        $grade = "B";
    } elseif ($average >= 50) {
        $grade = "C";
    } elseif ($average >= 40) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    if ($average >= 50) {
        $result = "Pass";
    } else {
        $result = "Fail";
    }

    echo "Student: " . $studentName . PHP_EOL;
    echo "Total: " . $total . PHP_EOL;
    echo "Average: " . $average . PHP_EOL;
    echo "Grade: " . $grade . PHP_EOL;
    echo "Result: " . $result . PHP_EOL;
}




