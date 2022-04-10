<?php


echo "Welcome To the Php tutorial on functions";


function processmarks($marksarr)  //function definition
{
    $sum=0;
    foreach ($marksarr as $value) {
        $sum=$sum+$value;
        
    }

    return $sum;   //returning the sum of marks 
}



function Averagemarks($marksarr)  //function definition
{
    $sum=0;   //sum  container
    $count=0;  //count container

    foreach ($marksarr as $value) {
        $sum=$sum+$value;
        $count+=1;
    }

    $avg_marks = $sum/$count;  //calculating the average 

    return $avg_marks; // returning the average marks 
}


$sarvesh=[56,76,90,78,78];
$rohan=[67,90,78,56];
$sarveshtotal=processmarks($sarvesh);  //function calling processmarks() 
$sarvesh_avg=Averagemarks($sarvesh);   //function calling Averagemarks()
$rohantotal=processmarks($rohan);    //function calling  processmarks()
print_r("\n");
print_r("Total Marks of Sarvesh : ");
print_r($sarveshtotal);  //printing values of return of processmarks($sarvesh)
print_r("\n");
print_r("Total Marks of rohan : "); //printing value of return  of processmarks($rohan)
print_r($rohantotal);
print_r("\n");
print_r("Average  Marks of sarvesh : ");
print_r($sarvesh_avg);


?>