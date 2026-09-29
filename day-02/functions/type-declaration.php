<?php

//Type declaration

function calculateArea(int $length,int $width): int {
    return $length * $width;
}

$areaOfRectangle = calculateArea(12,5);

echo "Area of Rectangle = " . $areaOfRectangle;