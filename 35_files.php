<?php

$fptr = fopen("myfile.txt" , "r");

// echo $fptr;

if($fptr==false)
{
   echo "we are unable to open the file please check if file is correct or not";
}

$content = fread($fptr, filesize("myfile.txt"));
$size= filesize("myfile.txt");
// echo $content;
echo $size;

fclose($fptr);