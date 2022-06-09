<?php 
echo  "What is Inheritance";
echo "<br>";

class Employee 
{
    public $name = "sarvesh";
    private $salary = 12000;
    private $grade = 3;

    function showName()
    {     
      echo " The name of this emplyee is $this->name ";
    }

    function setSalary($salary) 
    {
      $this->salary = $salary;
    } 

    function getSalary() 
    {
        echo " The salary of this $this->name is $this->salary ";
    } 

}

// Inheriting a new class Programmer from Employee
class programmer extends Employee{
    private $language = "php";

    function changeLaguage($lang){
        $this->language= $lang;
        // echo $this->grade; --> This will throw an error because grade is private in the parent class
        
    }

}


$rohan = new Employee();
$rohan->name = "Rohan";
$rohan->showName();
$rohan->setSalary(100);
echo "<br>";
$rohan->getSalary();
echo "<br>";

$shubham = new Employee();
$shubham->name = "Shubham";
$shubham->showName();
$shubham->setSalary(10000000);
echo "<br>";
$shubham->getSalary();
echo "<br>";

//object of the Derived class 
$geeta = new programmer();
$geeta->name = "geeta";
$geeta->showName();
echo "<br>";
$geeta->setSalary(12000);
$geeta->getSalary();
echo $geets->changeLaguage("python");



?>