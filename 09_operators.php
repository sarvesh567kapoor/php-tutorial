<?php


 //operators in php
/*
 1. Arithmetic operators
 2. Assigmment operators
 3. Comparison operators
 4. Logical operators


 */

// 1. Arithmetic operators (+,-,*,%,/)
 $a= 4;
 $b= 7;

 echo "The value of operand a is $a";
 echo"<br>";
 
 echo "The value of operand b is $b";
 echo"<br>";
 echo"<br>";
 echo  "The arthematic operations";
 echo"<br>";
 echo"<br>";
 echo "For a+b , the result is ". ($a+$b);
 echo "<br>";
 echo "For a-b , the result is ". ($a-$b);
 echo "<br>";
 echo "For a*b , the result is ". ($a*$b);
 echo "<br>";
 echo "For a/b , the result is ". ($a/$b);
 echo "<br>";
 echo "For a%b , the result is ". ($a%$b);
 echo "<br>";
 echo "For a**b , the result is ". ($a**$b);
 echo "<br>";

//  2. Assigmment operators (=,+=,-=,*=,/=,%=)

$x=7;
$x+=$x;
$y=10;
$y*=5;
echo "For x, the value is $x". "<br>";
echo "For y, the value is $y". "<br>";

// 3. Comparison operators(==,>,<,>=,<=,<>)

$x=7;
$y=7;

echo "For x==y , the result is ";
var_dump($x==$y);
echo "<br>";

echo "For x > y , the result is ";
var_dump($x > $y);
echo "<br>";

echo "For x <> y , the result is ";
var_dump($x <> $y);
echo "<br>";

// 4. Logical operators

$x=true;
$y=false;

echo "For x and y , the result is ";
var_dump($x and $y);
echo "<br>";

echo "For x or y , the result is ";
var_dump($x or $y);
echo "<br>";


echo "For x && y , the result is ";
var_dump($x && $y);
echo "<br>";


echo "For x || y , the result is ";
var_dump($x || $y);
echo "<br>";

echo "For !y , the result is ";
var_dump(!$y);
echo "<br>";









?>