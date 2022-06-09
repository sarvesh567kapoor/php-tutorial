<?php
declare(strict_types=1);

class Employee {
    // Properties of our class
    public string $name;
    public int $salary;

    // Methods of our class

    //Constructor - It allows you to initialize objects. it is the code which is executed whenever a new object is instantiated

    //constructor without arguments
    // function __construct(){
    //     echo "This is my Constructor for employee";
       
    // }


    //constructor with arguments 
    function __construct( string $name_pass, int $salary_pass){
        $this->name = $name_pass;
        $this->salary= $salary_pass;
       
    }

}
$rohan = new Employee("rohan",34);
$sarvesh = new Employee("sarvesh",89);
$skillf= new Employee("Skill-F",90);


//
echo "Hello My name is $rohan->name and my salary is $rohan->salary";
echo "<br>";
echo "Hello My name is $sarvesh->name and my salary is $sarvesh->salary";
echo "<br>";
echo "Hello My name is $skillf->name and my salary is $skillf->salary";




?>