<!DOCTYPE html>
<html>
<body>
    

<?php


//5. First Task
echo "Hello, my name is Joseph Amuasi." .PHP_EOL; 
echo "I am learning PHP." .PHP_EOL ;




//6. Variables 
echo "".PHP_EOL;
echo "".PHP_EOL;
echo "Variables" .PHP_EOL;
$name = "Joseph Amuasi";
$age = 20;
$university = "University of Ghana";
$programme = "BSc. Computer Science";
$country = "Ghana";
$current_year = 2026;


echo "Name : $name" .PHP_EOL;
echo "Age : $age" .PHP_EOL;
echo "University: $university" .PHP_EOL;
echo "Programme: $programme" .PHP_EOL;
echo "Country: $country" .PHP_EOL;
echo "Year: $current_year " .PHP_EOL;



//7. PHP Data Types
echo "".PHP_EOL;
echo "".PHP_EOL;
echo "PHP Data Types" .PHP_EOL;
$name = "Fiifi Amuasi";
$age = 18;
$price = 810.20;
$isOnline = true;
$subjects = ["Mathematics", "English", "Science"
];
$balance = null;


var_dump($name);
var_dump($age);
var_dump($price);
var_dump($isOnline);
var_dump($subjects);
var_dump($balance);



//8. Operators
echo "".PHP_EOL;
echo "".PHP_EOL;
echo "Operators" .PHP_EOL;
$a = 20;
$b = 6;


echo "Addition: " . $a + $b .PHP_EOL;
echo "Subtraction: " . $a - $b .PHP_EOL;
echo "Multiplication: " . $a * $b .PHP_EOL;
echo "Division: " . $a / $b .PHP_EOL;
echo "Renainder: " . $a % $b .PHP_EOL;
var_dump($a > $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a < $b);
var_dump($a <= $b);



//9. Conditional Statements

echo "".PHP_EOL;
echo "".PHP_EOL;
echo "Conditional Statements" .PHP_EOL;
$score = 90; 
if ($score >= 80 && $score <=100) { 
    echo "A"; 
} elseif ($score >= 70) { 
    echo "B"; 
} elseif ($score >= 60) { 
    echo "C"; 
} elseif ($score >= 50) { 
    echo "D"; 
} else { 
    echo "F"; 
}



//10. Loops
echo "".PHP_EOL;
echo "".PHP_EOL;
echo "Practice 1".PHP_EOL;

for ($i = 1; $i <= 100; $i++) {
    echo $i . PHP_EOL;
}


echo "".PHP_EOL;
echo "Practice 2".PHP_EOL;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }
}

echo "".PHP_EOL;
echo "".PHP_EOL;
echo "Practice 3".PHP_EOL;

$sum = 0;
$i = 1;
while ($i <= 100) {
    $sum += $i;
    $i++;
}

echo "The sum of numbers from 1 to 100 is: " . $sum . PHP_EOL;



echo "".PHP_EOL;
echo "".PHP_EOL;
echo "Practice 4".PHP_EOL;

$names = ["Ama", "Kojo", "Yaw", "Akosua"];

foreach($names as $name) {
    echo $name . PHP_EOL;
}



//11. Learn to Read Errors


$name = "Joseph Amuasi";
echo $name;



?> 
</body>
</html>




