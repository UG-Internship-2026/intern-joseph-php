<?php

function calculateGrade($score) {
    if ($score > 0 && $score <= 100) {
        if ($score >= 80 && $score <= 100) {
        return "A";
        } elseif ($score >= 70) {
            return "B";
        } elseif ($score >= 60) {
            return "C";
        } elseif ($score >= 50) {
            return "D";
        } elseif ($score >= 0 && $score < 50 ) {
            return "F";
        }
    } else {
        return null;
    }
    
}


$myGrade = calculateGrade(90);

if($myGrade != null) {
    echo "Grade: " . $myGrade;
} else {
    echo "Invalid score, must be (0 - 100) ";
}
