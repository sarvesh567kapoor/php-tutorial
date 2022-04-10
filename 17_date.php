<?php

echo "Welcome to the dates in Php <br>";


$d= date("l");

$m= date("dS F l Y");

$x= date("d D l y");

$today = date("D M j G:i:s T Y");  
$today1 = date("Y-m-d g:i A");
$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));

echo "Todays Date is $d <br>";
echo "Todays Date is $m <br>";
echo "Todays Date is $x <br>";


echo "Todays Date Time is $today <br>";

echo "Todays Date Time is $today1 <br>";

echo "Tomorrows Date Time is $tomorrow <br>";

$year= date("Y");

echo "Copyright $year | All rights reserved <br>";