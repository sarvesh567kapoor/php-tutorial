<?php

$fptr = fopen("myfile.txt" , "r");

// echo $fptr;

if($fptr==false)
{
   echo "we are unable to open the file please check if file is correct or not";
}

// echo fgets($fptr);

/*
//Reading a file line by line  
while($a=fgets($fptr))  //$a is false when there is no data to read
{
    echo $a; 

}
*/


/*
//Reading a file character by character  
while($a=fgetc($fptr))  //$a is false when there is no data to read
{
    echo $a;
    break; 

}
*/


// write a programme to read and print the file data util a full stop . is encounterd

while($a=fgetc($fptr))
{
   echo $a;
   if($a=="."){
       break;
   }

}
fclose($fptr); //close the file important










