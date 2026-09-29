<?php

#Function with return values

function calculateAge($birthYear, $currentYear) {
    return $currentYear - $birthYear;
}

$myAge = calculateAge(2006,2026);


echo "I am " . $myAge . " years old!";


