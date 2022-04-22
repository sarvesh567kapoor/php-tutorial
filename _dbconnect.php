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