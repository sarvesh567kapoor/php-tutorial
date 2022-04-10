<?php


echo "Welcome to the Multidimention array In php";

// array inside another array is called as multidimention array

// array dimention 

// why use multidimetion array 
// if we want to store data in table form or display data in table form  we can use multidimention array.


// multidimention arrya
for ($i=0; $i <10 ; $i++) {
    for ($j=0; $j<10 ; $j++) { 
        $arra[$i][$j]=0;  //two dimentional array
       
    } 
  
}
echo "<br>";

for ($i=0; $i <10 ; $i++) {
    for ($j=0; $j<10 ; $j++) { 
        print_r($arra[$i][$j]);
        // echo "<br>";
    } 
    echo "<br>";
}

//next type of multidimention array

$multidim = array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(1,2,3,4),
    array(8,9,7,6)

);

for ($i=0; $i < count($multidim) ; $i++) { 
    echo var_dump($multidim[$i]); //prints the array 
    echo "<br>";
}

for ($i=0; $i < count($multidim) ; $i++) { 
    for ($j=0; $j < count($multidim[$i]) ; $j++) { 
        echo $multidim[$i][$j]; //printing the values of multidimention array 
    }
    echo "<br>";
}

$i=9; $j=10;



?>