<?php

echo " Welcome to For each loop in php \n";

$array_new = array("banana","apples","heroin","bread");


// for ($i=0; $i < count($array_new) ; $i++) { 
    
//       echo $array_new[$i];
//       echo "\n";

// }

//beter way to do this

// foreach ($array_new as $key => $value) {
//     echo $key;
//     echo "=>";
//     echo $value;
//     echo "\n";
// }

// or

foreach ($array_new as $value) {
    echo $value;
    echo "\n";
}



?>
