<?php 
//Write a program of a class with name student, highlighting its properties and methods.

class Student {
    public $name;
    public $class;
    
    public function set_deets($name, $class): void {
        $this->name = $name;
        $this->class = $class;
    }

    public function get_deets(): void {
        echo "<hr>Student Name: $this->name <br> Class: $this->class<hr>";
    }

}

$student1 = new Student();
$student1->set_deets("Denaerys Targaryen", "Dragonstone");
$student1->get_deets();

$student2 = new Student();
$student2->set_deets("Jon Snow", "Winterfell");
$student2->get_deets();

$student3 = new Student();
$student3->set_deets("Tyrion Lannister", "Casterly Rock");
$student3->get_deets();

$student4 = new Student();
$student4->set_deets("Arya Stark", "Winterfell");
$student4->get_deets();

$student5 = new Student();
$student5->set_deets("Sansa Stark", "Winterfell");
$student5->get_deets();

$student6 = new Student();
$student6->set_deets("Bran Stark", "Winterfell");
$student6->get_deets();

$student7 = new Student();
$student7->set_deets("Cersei Lannister", "King's Landing");
$student7->get_deets();

$student8 = new Student();
$student8->set_deets("Jaime Lannister", "Casterly Rock");
$student8->get_deets();

$student9 = new Student();
$student9->set_deets("Daario Naharis", "Meereen");
$student9->get_deets();

$student10 = new Student();
$student10->set_deets("Missandei", "Naath");
$student10->get_deets();

$student11 = new Student();
$student11->set_deets("Grey Worm", "Unsullied");
$student11->get_deets();

$student12 = new Student();
$student12->set_deets("Jorah Mormont", "Bear Island");
$student12->get_deets();

$student13 = new Student();
$student13->set_deets("Samwell Tarly", "Horn Hill");
$student13->get_deets();

$student14 = new Student();
$student14->set_deets("Gilly", "Craster's Keep");
$student14->get_deets();

$student15 = new Student();
$student15->set_deets("Brienne of Tarth", "Evenfall Hall");
$student15->get_deets();

?>
