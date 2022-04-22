<?php

//conecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sarvesh";

// create a connection 
$conn = mysqli_connect($servername,$username,$password,$database);

//die if connection was not sucessful
if(!$conn)
{
    die("<br> Sorry we are failed to connect <br>".mysqli_connect_error());
}
else 
{
echo "connected  sucessfully <br>";
}

// fetching the record in the table employee 
$sql = "DELETE FROM `employee` WHERE `employee`.`Role` = 'IT'
 LIMIT 4";

$result=mysqli_query($conn,$sql);
$aff= mysqli_affected_rows($conn);
echo " <br> Number of rows affected : $aff "; 
if($result)
{
    echo " <br>we deleted  the record sucessfully<br>";
}
else 
{
    echo "<br> sorry we are unable to delete the record <br>";
}



