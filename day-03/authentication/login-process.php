<?php
        session_start();
        
        $email = trim($_POST["email"]);
        $password = $_POST["password"];

        $user = [
            "email" => "joseph@gmail.com",
            "password" => password_hash("Joseph123", PASSWORD_DEFAULT)
        ];


        if(empty($email)) {
            echo "Email is required";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email";
        }

        if($email !== $user["email"]) {
            echo "Invalid email or password";
        } elseif(!password_verify($password, $user["password"])) {
            echo "Invalid email or password";
        } else {
            $_SESSION["user"] = $user["email"];

            header("Location: dashboard.php");

        }

        

        
?>
