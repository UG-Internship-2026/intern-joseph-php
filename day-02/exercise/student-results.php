<?php 

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
    [
        "name" => "Akosua",
        "score" => 55
    ],
    [
        "name" => "Kofi",
        "score" => 91
    ]
];


//1.Function to calculate Class Average

function classAverage($students) {
    $total = 0;
    foreach ($students as $student) {
        $total += $student["score"]; 
    };

    return $total / count($students);

};

$average = classAverage($students);
echo "\n1. Class Average: " . $average;




//2. Function to calculate Highest Score

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

echo "\n2. Highest Score: " . $highestScore;



// 3. Function to find the Lowest Score 

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
echo "\n3. Lowest Score: " . $lowestScore;



// 4. Function to find student who passed

function passedStudents($students) {
    $passedStudents = [];

    foreach($students as $student) {
        if($student["score"] >= 50){
            $passedStudents[] = $student;
        } 
    }

    return $passedStudents;
};

$studentWhoPassed = passedStudents($students);
echo "\n4. Student who passed";
foreach($studentWhoPassed as $student) {
    echo "\nName: " . $student["name"];
    echo "\nScore: " . $student["score"];
    echo "\n";  
}


// 5. Function to find a student by name 

function searchStudent($students, $name) {
    foreach($students as $student) {
        if ($student["name"] == $name){
            return $student;
        }

    }
    return null;
}

$student = searchStudent($students, "Kofi");

if($student !== null) {
    echo "\n5. Find student";
    echo "\n Name: " . $student["name"];
    echo "\n Score: " . $student["score"];
} else {
    echo "Student not found";
}

