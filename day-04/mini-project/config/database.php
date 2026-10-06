<?php

    try {

    $dsn="mysql:host=localhost;dbname=student_management;charset=utf8mb4";
    $username = "root";
    $password = "";

    $pdo= new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }