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

// fetching the record in the table employee using where clause 
$sql = "SELECT * FROM `employee` WHERE `Role` = 'programmer';";

$result=mysqli_query($conn,$sql);

//find the number of recourds returned

$num = mysqli_num_rows($result);  //returns the number of rows in sql query 

echo $num;
$number=1;
echo " Records Found In the database <br>";
while ($num)
{
    if($num > 0)
    {
        $row= mysqli_fetch_assoc($result);
      
    
        echo  $number ."Hi My name is " .$row['Name']. " and  my role is "  . $row['Role'] . " and my date of join is " . $row['DOJ(date of join)'] ;
        echo "<br>";
        $number+=1;
      
    }
    $num=$num-1;
}


// usage of where clause to update data 
$sql2 = "UPDATE `employee` SET `Name` = 'programmer_updated' WHERE `employee`.`Role` = 'programmer'";
$result2=mysqli_query($conn,$sql2);
$aff= mysqli_affected_rows($conn);
echo " <br> Number of rows affected : $aff "; 
if($result2)
{
    echo " <br>we updated the record sucessfully<br>";
}
else 
{
    echo "<br> sorry we are unable to update <br>";
}




?>