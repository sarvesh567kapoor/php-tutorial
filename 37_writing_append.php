<?php


// echo "writing in file and append";

// $fptr= fopen("myfile2.txt", "w");  //once you open the file in w mode if file does not  exist then the programe will create the file  and  if the file exist it first truncate the file and then execute the  writing in  the file 
// fwrite($fptr, "this is the best file on this folder please don't argue with me");
// fwrite($fptr, "this is the new content in the file");


// fclose($fptr);


//Appending to a file in php
$new=2;
$fptr= fopen("myfile2.txt", "a");
while($new<10){
$new_text=$new." this is the new content in the file\n";
fwrite($fptr,$new_text);
$new  +=1;
}

fclose($fptr);





?>