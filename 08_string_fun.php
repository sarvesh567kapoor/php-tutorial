<?php


$name="sarvesh";
echo $name;

echo "<br>";

// 1.strlen()

echo "the length ". "of my string is ".strlen($name);
echo "<br>";

// 2.str_word_count()
$des="sarvesh is a very good boy";

echo "the number of word in string '$des' = ".str_word_count($des);
echo "<br>";

// 3.strrev()

$name1="hello";
echo strrev($name1);
echo "<br>";

// 4.strpos("string", "substring")  return the position of starting substring in string counting from zero 

$des1="sarvesh is a very good boy";
echo strpos($des1, "is");  //"is" in $des1 is at 8th position 
echo "<br>";
echo strpos($des1, "sarvesh");
echo "<br>";

// 5. str_revplace("replace","replace with","string")
$des2="sarvesh is a very good boy";
echo "<br>";
echo str_replace("sarvesh","Rohan",$des2);
// replace sarvesh with rohan in $des2
echo "<br>";

// 6. str_repeat($name,100);  repeat the sring 100 times and return 
$des3="sarvesh is a very good boy";
echo str_repeat($des3,3);
echo "<br>";

 

// 7. rtrim("<pre> this is a pre tag </pre>) ;
echo"<pre>";   
$sarvesh="   sarvesh is a good boy    ";
echo rtrim($sarvesh); // remove the space from right end of string 
echo"</pre>"; 

echo"<pre>";   
$sarvesh="   sarvesh is a good boy    ";
echo ltrim($sarvesh); // remove the space from left end of string 
echo"</pre>";  


   

?>