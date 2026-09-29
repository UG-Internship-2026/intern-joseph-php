<?php

// Multidimensional Arrays

$students = [ 
    [ 
        "name" => "Ama", 
        "score" => 78 
    ], 
    [ 
        "name" => "Kojo", 
        "score" => 64 
    ], 
    [ 
        "name" => "Yaw", 
        "score" => 82
    ],
];

echo "\n==============================";
echo "\nNAME" .  " | " . "SCORE";
echo "\n" . $students[0]["name"] . "  |  " . $students[0]["score"];
echo "\n" . $students[1]["name"] . "  |  " . $students[1]["score"];
echo "\n" . $students[2]["name"] . "  |  " . $students[2]["score"];



// Looping Through The Array
echo "\n\nLooping Array Display";
foreach($students as $student) {
    echo "\n" . $student["name"] . "  |  " . $student["score"];
};

