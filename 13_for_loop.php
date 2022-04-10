<?php

echo "for loops in php \n";

echo "for loop  Iterates for a preset number of times. \n";

echo "In the absence of a condition,  the loop iterates for an infinite number of times till it reaches break command. \n";


for ($i=0; $i<=10 ; $i++) {  //initialization; //condition ; //incrementation
     
    echo $i;
   // if($i==10){    avoid running infinite loop 
    //     $i=0;
    // }
    echo "\n";
    
}

echo "For loop has endded";