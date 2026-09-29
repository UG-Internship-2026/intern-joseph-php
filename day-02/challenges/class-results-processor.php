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
        "score" => "96"
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


#Highest Score Function
function highestScore($students) {
    $highest = 0;

    foreach ($students as $student) {
        if($student["score"] >= $highest){
            $highest = $student["score"];
        }
    }

    return $highest;
};
$highestScore = highestScore($students);


#Lowest Score Function
function lowestScore($students) {
    $lowest = 100;
    foreach($students as $student) {
        if($student["score"] <= $lowest ){
            $lowest = $student["score"];
        }
    }

    return $lowest;
};
$lowestScore = lowestScore($students);


#Class Average Function 
function classAverage($students) {
    $total = 0;
    foreach ($students as $student) {
        $total += $student["score"]; 
    };

    return $total / count($students);

};
$average = classAverage($students);


function passedStudents($students) {
    $passedStudents = [];

    foreach($students as $student) {
        if($student["score"] >= 50){
            $passedStudents[] = $student;
        } 
    }

    return $passedStudents;
};

$studentWhoPassed = count(passedStudents($students));


#I wont create another funtion for student who didnt pass
# I can simply perform an arithmetic operation 

$studentWhoFailed = count($students) - $studentWhoPassed;


# Top Students
function topStudents($students) {
    global $highestScore;
    $topStudent = [];

    foreach($students as $student) {
        if($student["score"] === $highestScore){
            $topStudent[] = $student;
        } 
    }

    return $topStudent;
};

$topStudent = topStudents($students);
foreach($topStudent as $student) {
    echo "\nTop Student: " . $student["name"];
}


echo "\n==================================";
echo "\nCLASS RESULT";
echo "\n==================================";
echo "\n";
echo "\nHighest Score: " . $highestScore;
echo "\nLowest Score: " . $lowestScore;
echo "\nClass Average: " . $average;
echo "\nNumber Passed: " . $studentWhoPassed;
echo "\nNumber Failed: " . $studentWhoFailed;
foreach($topStudent as $student) {
    echo "\nTop Student: " . $student["name"];
}
