<?php
class Employee
{
    public $name;
   
    public $salary;

    function __construct($name,$salary)
    {
        $this->name= $name;
      
        $this->salary= $salary;
        $this->get_details();
    }
    protected function get_details()
    {
         echo "My name is $this->name and  my salary is around $this->salary";
    }
}
class Programmer extends Employee {
    public $lang="php";

    function __construct($name,$lang,$salary)
    {
        $this->name= $name;
        $this->lang= $lang;
        $this->salary= $salary;
        $this->get_details();
    }

}


$sarvesh = new Employee("sarvesh",900);

echo"<br>";

$sarvesh = new Programmer("rohan","Python",3000);


?>