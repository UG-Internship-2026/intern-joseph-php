<?php

    try {
        $dsn="mysql:host=localhost;dbname=student_management";
        $username="root";
        $password="";

        $pdo = new PDO($dsn, $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query(
            "SELECT *
            FROM students
        ");
        
    
        $students = $stmt->fetchAll();

        echo "Students <br>";
        echo "-------------------<br>";
        foreach($students as $student) {
            echo "ID: " . $student["id"];
            echo "<br>First name: " . $student["first_name"];  
            echo "<br>Last name: " . $student["last_name"];
            echo "<br>Email: " . $student["email"];
            echo "<br>Programme: " .$student["programme"] . "<br> <br>";
        }
        
        
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }


?>