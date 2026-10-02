<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];


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
                echo "<br>Email not valid";
            }
        }

        if(empty($password)) {
            echo "<br>Password is required";
        } elseif (strlen($password) < 8) {
            echo "<br>Password must be at least 8 characters";
        } 

        if($password !== $confirm_password) {
            echo "<br>Passwords do not match";
        }
        
        
    
    ?>
</body>
</html>