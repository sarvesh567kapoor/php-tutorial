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
// echo "connected  sucessfully <br>";
}

// fetching the record in the table employee 
$sql = "SELECT * FROM `employee`";

$result=mysqli_query($conn,$sql);

//find the number of recourds returned

$num = mysqli_num_rows($result);  //returns the number of rows in sql query 

echo "<br>";
echo "<table border='1'>

<tr>

<th>Sno</th>

<th>Name</th>

<th>Role</th>

<th>DOJ(date of joining)</th>

</tr>";
//Display the rows returned by the sql query
while ($num){
if($num > 0)
{
    $row= mysqli_fetch_assoc($result);
    echo "<tr>";

    echo "<td>" . $row['Sno'] . "</td>";
  
    echo "<td>" . $row['Name'] . "</td>";
  
    echo "<td>" . $row['Role'] . "</td>";
  
    echo "<td>" . $row['DOJ(date of join)'] . "</td>";
  
    echo "</tr>";
}
$num=$num-1;
}

echo "</table>";

mysqli_close($conn);




?>