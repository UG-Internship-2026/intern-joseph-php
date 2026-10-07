<?php 

function validateStudent($first_name, $last_name, $email, $programme) {
$errors = [];
//Validate First Name
if(empty($first_name)) {
        $errors[] = "First name is required";
} 

//Validate Last Name
if(empty($last_name)) {
        $errors[] = "Last name is required";
} 


//Validate Email
if(empty($email)) {
        $errors[] = "Email is required";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email is invalid";
}


//Validate Programme
if(empty($programme)){
    $errors[] = "Programme is required";
}


return $errors;
}