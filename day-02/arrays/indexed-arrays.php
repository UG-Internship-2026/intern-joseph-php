<?php

// Indexed Arrays

$programmes = [
    "Computer Science",
    "Information Technology",
    "Business Adminstration",
    "Biomedical Engineering",
    "Physical Science"
];


$programmes[] = "Mathematical Science";
array_push($programmes, "Biochemistry");
array_pop($programmes);
array_shift($programmes);
array_unshift($programmes);


echo "PROGRAMMES";
echo "\n" . $programmes[0];
echo "\n" . $programmes[1];
echo "\n" . $programmes[2];
echo "\n" . $programmes[3];
echo "\n" . $programmes[4];
echo "\nNumber of Programmes: " . count($programmes);

