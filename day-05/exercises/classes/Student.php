<?php

class Student{
    private string $name;
    private string $email;
    private string $programme;
    private int $studentId;

    public function __construct(string $name, string $email, string $programme, int $studentId) {
        $this->name = $name;
        $this->email = $email;
        $this->programme = $programme;
        $this->studentId = $studentId;
    }

    public function getName():string {
        return $this->name;
    }

    
    public function getEmail():string {
        return $this->email;
    }

    
    public function getProgramme():string {
        return $this->programme;
    }

    
    public function getStudentId():int {
        return $this->studentId;
    }
}

$students = [
    new Student("Ama", "ama@example.com", "Computer Science", 22389091),
    new Student("Kojo", "kojo@example.com", "Information Studies", 11209864),
    new Student("Yaw", "yaw@example.com", "Political Science", 10194892),
];
foreach($students as $student) {
    echo "Name: " . $student->getName() . "<br>";
    echo "Email: " . $student->getEmail() . "<br>";
    echo "Programme: " . $student->getProgramme() . "<br>";
    echo "Student ID: " . $student->getStudentId() . "<br><br>";
}