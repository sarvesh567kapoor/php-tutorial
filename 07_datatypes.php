<?php

$name="sarvesh";
$number= 200;

/*

php datatypes

1.String
2.Integer
3.Float
4.Boolean
5.Object
6.Array
7.Null

*/


//1.String(sequence of character)
$name="sarvesh";
$friend='harry';
echo "$friend is a good friend of $name";
 
// 2.Integer -Non Decimal Number
$income= 455;
$debt=-677;
echo "<br>";
echo $debt;
echo "<br>";
echo $income;

//3.Float -Decimal point number
$income = 277.9;
$debt = 45.9;
echo "<br>";
echo $debt;
echo "<br>";
echo $income;

//4. Bollean Can be either true or false

$x= true;
$is_friend= false;
echo "<br>";
var_dump($x);
echo "<br>";
var_dump( $is_friend);

//5. Objects - It is a real World entity that have properties and  methods

// Employee is a class ---> sarevsh can be one object



//6. Array -Used to store multiple value in a single variable
echo "<br>";
$friend=array("sarvesh","sumit","shubam","skillf","larry");
var_dump($friend);
var_dump($friend[1]);

//7.NULL(means nothing  or  no value )
$name=NULL;
var_dump($name);




?>