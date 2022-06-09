<?php

//starting the session and get the data
session_start();
if(isset($_SESSION['username'])){
echo "Welcome ". $_SESSION['username'] ;
echo "<br>";
echo "Your favourite category is ".$_SESSION['favcat'] ;
echo "<br>";
echo "thankyou";
}
else{
    echo "please login again  to  continue";
    echo "<br>";
    echo "thankyou";
}