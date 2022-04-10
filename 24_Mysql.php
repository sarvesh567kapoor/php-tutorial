<?php


echo "Welcome to the stage where we are ready to get connected to a database <br>";

// ways to connect to a Mysql Database

// 1.MySqLi extension  only connect to the mysql database
    //   i>functional
    //   ii>object oriented

// 2.PDO  connect to multiplatform database


//conecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection 
$conn = mysqli_connect($servername,$username,$password);

//die if connection was not sucessful

if(!$conn){

    die("<br> Sorry we are failed to connect ".mysqli_connect_error());
}

echo "connected  sucessfully";



?>