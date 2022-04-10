<?php

echo "Welcome to the Associative array in php  <br>";

$array1 =  array('this','that','what');

echo $array1[0];
echo "<br>";
echo $array1[1];
echo "<br>";
echo $array1[2];
echo "<br>";

// echo $array1[5];  //acessing the index that is not there in array 


// Associative  arrays (also called as indexed array or numeric array)

$favcol  = array(
                'harry' =>'red' ,
                'sarvesh' =>'yellow',
                'purnima' =>'pink' ,
                8 =>'none'
                 );

echo $favcol['harry'];
echo "<br>";
echo $favcol['sarvesh'];
echo "<br>";
echo $favcol['purnima'];
echo "<br>";
echo $favcol[8];  //no error it is correct 
echo "<br>";



//loop throught in associative array 
foreach ($favcol as $key => $value) {

    echo "Favourite color of $key is $value  <br>";
}

//adding the  element in asociative array 
$existing_array = array('a'=>'b', 'b'=>'c');
$new_array = array('d'=>'e', 'f'=>'g');

$final_array=array_merge($existing_array, $new_array);
var_dump($final_array);






?>