<?php

//Write a program to understand the concept of default and parameterized constructor in PHP.

class Student
{
    public $name;
    public $rollno;
    public $marks;

    function __construct($name = "Um... Ya forgot your name?!", $rollno = 0, $marks = 0) //combined constructor
    {
        $this->name = $name;
        $this->rollno = $rollno;
        $this->marks = $marks;
    }

    function display()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Roll No: " . $this->rollno . "<br>";
        echo "Marks: " . $this->marks . "<br>";
    }
} //end of class

echo 'This is happening becuase of the default constructor<br>';
$student1 = new Student();
$student1->display();

echo '<br>This is happening becuase of the parameterized constructor<br>';
$student2 = new Student("Visenya Targaryen", 101, 90);
$student2->display();