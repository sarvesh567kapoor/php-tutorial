<?php

echo "While Loops in Php \n";

echo "wHILE loop Iterates till a condition is met \n";

echo "The difference between for loop and while loop is that in for loop the number of iterations to be done is already known and is used to obtain a certain result whereas in while loop the command runs until a certain condition is reached and the statement is proved to be false.";

$a=0; //initialization

while ($a <= 100)  //condition 
{
    echo $a;  //working
    echo "\n";
    $a++;    //incrementation

    if($a==101){   
    $a=0;         //infinite loop condition 
    }
}   



