<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Results</title>
</head>
<body>
    <?php
        $name = trim($_POST["name"]);
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        
        if(empty($name)){
            echo "<br>Name is required";
        } else {
            echo "<br>Name: " . $name;
        }

        if(empty($email)) {
            echo "<br>Email is required";
        } else {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<br>Email: " . $email;
            } else {
                echo "Email not valid";
            }
        }
        
        if(empty($subject)) {
            echo "<br>Subject is required";
        } else {
            echo "<br>Subject: " . $subject;
        } 
        
        if(empty($message)) {
            echo "<br>Message is required";
        } else {
            if(strlen($message) < 10) {
                echo "<br>Message is less than 10 characters boss, message should have more than 10 characters";
            } else {
                echo "<br>Message <br>" . $message;
            }
        }
        
    ?>

</body>
</html>