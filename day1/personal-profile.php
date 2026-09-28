<?php

echo "==========================".PHP_EOL; 
echo "PERSONAL PROFILE".PHP_EOL;
echo "==========================".PHP_EOL;

$name = "Joseph Amuasi";
$age = 20;
$university = "University of Ghana";
$programme = "BSc. Computer Science";
$country = "Ghana";
$currentYear = 2026;
$currentLevel = 200;
$programmeDuration = 4;
$timeleft = $programmeDuration - ($currentLevel / 100 );
$graduationYear = $currentYear + $timeleft;



echo "Name: " . $name . PHP_EOL;
echo "Age: " . $age . PHP_EOL;
echo "University: " . $university . PHP_EOL;
echo "Programme: " . $programme . PHP_EOL;
echo "Country: " . $country . PHP_EOL;
echo "Current Year: " . $currentYear . PHP_EOL;
echo "Approximate Graduation Year: " . $graduationYear . PHP_EOL;


?>