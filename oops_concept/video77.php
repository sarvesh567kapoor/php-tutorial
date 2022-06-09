<?php


class Players {
    //properties
    public $name;
    public $speed = 5;
    public $running = false;
    
    //Methods
    function set_name($name){
        $this->name= $name;
    }
    function get_name(){
        return $this->name;
    }
    function run(){
        $this->running= true;
    }
    function stopRun(){
        $this->running= false;
    }


}


echo "Lets Understand OOPS Using GTA Vice City <br>";

// player1
$player1 = new players();
$player1->set_name("sarvesh");
echo $player1->get_name();
echo"<br>";

// player2
$player2 = new players();
$player2->set_name("Rohan");
echo $player2->get_name();
echo"<br>";

// player3
$player3 = new players();
$player3->set_name("sumit");
echo $player3->get_name();
echo"<br>";


?>