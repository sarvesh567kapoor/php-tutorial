<?php


class Employee {
    // Properties of our class
    public string $name;
    public int $salary;

   

    //constructor 
    function __construct( string $name_pass, int $salary_pass){
        $this->name = $name_pass;
        $this->salary= $salary_pass;
       
    }
    
    //Destructor
    function __destruct() {
        echo "<br>";
        echo "I am Destructing $this->name";

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




?>