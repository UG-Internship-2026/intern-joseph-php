<?php

$students = [
    [
        "name" => "Ama",
        "score" => 78
    ],
    [
        "name" => "Abeka",
        "score" => 82
    ],
    [
        "name" => "Rex",
        "score" => 92
    ],
    [
        "name" => "Yaw",
        "score" => 45
    ],
    [
        "name" => "Kojo",
        "score" => 56
    ],
    [
        "name" => "Seb",
        "score" => 78
    ],
    [
        "name" => "Penny",
        "score" => 84
    ],
    [
        "name" => "Collins",
        "score" => 96
    ],
    [
        "name" => "Benedict",
        "score" => 25
    ],
    [
        "name" => "Nii Tackie",
        "score" => 66
    ]
];


function findStudent($students, $name) {
    foreach($students as $student) {
        if (strcasecmp($student["name"], $name) === 0) {
            return $student; 
        }
    }
    return null;

}

$foundStudent = findStudent($students, "yaw");


if($foundStudent !== null) {
    echo "\nStudent Found";
    echo "\nName: " . $foundStudent["name"];
    echo "\nScore: " . $foundStudent["score"];
    if($foundStudent["score"] >= 50) {
        echo "\nStatus: Pass";
    } else {
        echo "\nStatus: Fail";
    }
}else {
    echo "\nStudent not found";
}


