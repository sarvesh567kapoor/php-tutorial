<?php


// echo "Welcome to the stage where we are ready to get connected to a database <br>";

// ways to connect to a Mysql Database

// 1.MySqLi extension  only connect to the mysql database
    //   i>functional
    //   ii>object oriented

// 2.PDO  connect to multiplatform database


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

// create a table in the database
$sql = "create table `student1` (`sno` int(10) not null auto_increment, `name` varchar(20) not null, `subject` varchar(20) not null , primary key (`sno`)) ";
$result=mysqli_query($conn,$sql);

// check for the table  creation success
if($result)
{
      echo "<br> the table was created sucessfully ";
}
else
{
    echo "<br> the table  was not  created ! <br> ";
    echo mysqli_error($conn);
}









?>