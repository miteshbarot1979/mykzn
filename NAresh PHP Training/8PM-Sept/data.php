<?php 
include("connection.php");

$resultSet = mysqli_query($con,"select *from enquiries");


$count = mysqli_num_rows($resultSet);

$row = mysqli_fetch_object($resultSet);
echo "<pre>";
print_r($row);

echo $row->id;


/*for($i = 0; $i < $count; $i++)
{
	$row = mysqli_fetch_assoc($resultSet);
	echo $row['id']."<br>";
	echo $row["name"]."<br>";
	echo $row["email"]."<br>";
	echo $row["mobile"]."<br>";
	echo $row["message"]."<br>=========<br>";
}
*/
/*for($i = 0; $i < $count; $i++)
{
	$row = mysqli_fetch_row($resultSet);
	echo $row[1]."<br>";
	echo $row[2]."<br>";
	echo $row[3]."<br>";
	echo $row[4]."<br>=========<br>";
}
*/

?>