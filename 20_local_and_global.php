<?php

echo "Welcome  to scope and local global in php <br>";


$a=98; //global variable
$b=10000; //global variable
$c=9000; //global variable


function printvalue()
{
    // $a=97;  //local variable    
    global $a;
    echo "The value of your variable is $a";
    echo "<br>";
    $a=100;
}

echo $a;
echo "<br>";
printvalue();
echo $a;
echo "<br>";


var_dump($GLOBALS); // PRINTING ALL GLOBAL VARIABLES
var_dump($GLOBALS ["a"]);





?>