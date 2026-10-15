<?php

class Lecturer {
    private string $name; 
    private string $email;
    private string $department; 

    public function __construct(string $name, string $email, string $department)
    {
        $this->name = $name;
        $this->email = $email;
        $this->department = $department;
    }

    public function getName():string {
        return $this->name;
    }

    public function getEmail():string {
        return $this->email;
    }

    public function getDepartment():string {
        return $this->department;
    }

    public function introduce():string {
        return "The name is Lecturer ". $this->name . ". <br> You can contact on ". $this->email . ". <br> My Department is the " . $this->department . " department";
    }
}

$lecturers = [
    new Lecturer("Apeweh", "apewehgodfred@example.com", "CS"),
    new Lecturer("Mawu Kenor", "mawukenor@example.com", "IT"),
    new Lecturer("Asante Esther", "estherasante@example.com", "Information Studies"),
    new Lecturer("Jeremiah Tetteh", "miahtetteh@example.com", "Polotical Science"),
];

foreach($lecturers as $lecturer) {
    echo $lecturer->introduce() . "<br> <br>";
}

