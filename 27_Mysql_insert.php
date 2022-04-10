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

// variable to be inserted into the table
$name="rohan";
$subject= "hindi";

// inserting the record in the table sarvesh 
$sql = "INSERT INTO `student1` (`name`, `subject`) VALUES ('$name','$subject')";

$result=mysqli_query($conn,$sql);

// check for the  insertion in the table sarvesh 
if($result)
{
      echo "<br> the data  was inserted  sucessfully ";
}
else
{
    echo "<br>  the data  was not  inserted  sorry !<br> ";
    echo mysqli_error($conn);
}









?>