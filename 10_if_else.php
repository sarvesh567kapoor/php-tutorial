<?php

// $a=65;
// $b=9;

// if($a>78)
// {
//     echo "a is greater than 78";
// }

// else
// {
//     echo "a is not grater than 78";
// }

$age =24;

// If Else Ladder
/*
if($age>18){

    //execute only if age is greater than 18
    echo "You can drink water and alcohol";

}

elseif($age >13) {
        
        //execute only if age is greater than 13 and if part is not executed
         echo "You can drink only chain and water";
}

else {

    //execute only if  other part is not executed
    echo "You can drink water only";
}

*/

// Multiple If 

$age=89;

// if($age >18){

//     //execute only if age is greater than 18
//     echo "You can drink water and alcohol <br>";

// }

// if($age >13) {
        
//         //execute only if age is greater than 13
//          echo "You can drink only chain and water <br>";
// }

// else {

//     //execute only if  other part is not executed
//     echo "You can drink water only <br>";
// }

// echo "Done  <br>";


// Quick Quiz

// 1. create  an if else ladder using more than one else 
// 2. write a programme to allow to driver to drive only if his age is greater than equal to  25 and lesser than equal to  65

// 1.Solution  a dice game ;

$dice = rand(0,6);

if ($dice == 6)
{
    echo "Welcome To the Game of you have score a 6";
    echo "<br>";
}
elseif ($dice == 0) 
{
    echo "Sorry  Try again  the Game of you have score a 0";
    echo "<br>";
}
elseif ($dice == 1) 
{
    echo "Sorry  Try again  the Game of you have score a 1";
    echo "<br>";
}

elseif ($dice == 2) 
{
    echo "Sorry  Try again  the Game of you have score a 2";
    echo "<br>";
}

elseif ($dice == 3) 
{
    echo "Sorry  Try again  the Game of you have score a 3";
    echo "<br>";
}

elseif ($dice == 4) 
{
    echo "Sorry  Try again  the Game of you have score a 4";
    echo "<br>";
}

else
{
    echo "Sorry  Try again  the Game of you have score a 5";
    echo "<br>";
}

echo "\n";


// 2. solution

$driver_age = (int) readline("Enter the age of the Driver : ");

function generate_license($suffix = null) {  //function to generate random license number
    // Default tokens contain no "ambiguous" characters: 1,i,0,o
    if(isset($suffix)){
        // Fewer segments if appending suffix
        $num_segments = 3;
        $segment_chars = 6;
    }else{
        $num_segments = 4;
        $segment_chars = 5;
    }
    $tokens = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
    $license_string = '';
    // Build Default License String
    for ($i = 0; $i < $num_segments; $i++) {
        $segment = '';
        for ($j = 0; $j < $segment_chars; $j++) {
            $segment .= $tokens[rand(0, strlen($tokens)-1)];
        }
        $license_string .= $segment;
        if ($i < ($num_segments - 1)) {
            $license_string .= '-';
        }
    }
    // If provided, convert Suffix
    if(isset($suffix)){
        if(is_numeric($suffix)) {   // Userid provided
            $license_string .= '-'.strtoupper(base_convert($suffix,10,36));
        }else{
            $long = sprintf("%u\n", ip2long($suffix),true);
            if($suffix === long2ip($long) ) {
                $license_string .= '-'.strtoupper(base_convert($long,10,36));
            }else{
                $license_string .= '-'.strtoupper(str_ireplace(' ','-',$suffix));
            }
        }
    }
    return $license_string;
}


$license = generate_license(); // generate the random licence number 

if($driver_age <18) {

    echo "Sorry You can't drive you are under age  <br>";

} 
elseif($driver_age >=25 and $driver_age <=65) {

    echo "Greetings You Can Drive The car here is you lincence number  $license \n ";
}

else {
     echo "Sorry You Can't Drive  Thanking you <br> ";

}
















?>