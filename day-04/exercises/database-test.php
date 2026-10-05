<?php

    try {

    //Connect to MySQL
        $dsn="mysql:host=localhost;dbname=student_management";
        $username="root";
        $password="";

        $pdo = new PDO($dsn, $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Retrieve students
        $stmt = $pdo->query(
            "SELECT *
            FROM students"
        );

        $students = $stmt->fetchAll();
        
    //Display students name and programme
        echo "Students <br>";
        echo "-------------------------------------<br>";
        foreach($students as $student) {
            echo "<br>" . $student["first_name"] . " " . $student["last_name"];
            echo "<br>" .$student["programme"] . "<br>";
        } 
        
        
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }


?>