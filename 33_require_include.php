<?php

include "_dbconnect.php"; //included the code  of _dbconnect.php "if _dbconnect1.php file is not present the next line is still executed".
// require '_dbconnect.php'; // require the code of _dbconnect.php "if _dbconnect1.php file is not present then the execution of program is terminated by error"

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



?>