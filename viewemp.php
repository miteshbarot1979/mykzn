<?php

include('config.php');
session_start();
echo "Welcome ".$_SESSION['from_Login'];
$mylogindi=$_SESSION['from_Login'];


//session_start();
//echo "Welcome ".$_SESSION['from_Login'];
//$mylogindi=$_SESSION['from_Login'];
error_reporting(0);
if ($mylogindi==true)
{

}
else
{
      // only alert not cofiation message >>>>>  echo "<script>alert('Sorry You are not authorised');</script>"; 
      echo "<script> alert('You are not Authorised Person')=windows.location='login.php'</script>";
      echo "<script>location.href='login.php' </script>";
}
?>

<?php

require_once ('Connect.php');
$sql = "SELECT * from `emp_master` WHERE emp_master.emp_code = emp_code";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Employee |  Admin Panel | Vasudhara Dairy</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
		
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Emp. ID</th>
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Address </th>
				<th align = "center">Designation</th>
				<th align = "center">Department</th>
				<th align = "center">Commitee Member</th>
				<th align = "center">Appex Member</th>
				<th align = "center">Kaizen Status</th>
								
				<!--<th align = "center">Options</th> --->
			</tr>

			<?php
				while ($emp_master = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$emp_master['Emp_Code']."</td>";
					echo "<td><img src='".$emp_master['Emp_Img']."' height = 60px width = 60px></td>";
					echo "<td>".$emp_master['Emp_Name']."</td>";
					
					echo "<td>".$emp_master['Emp_Add']."</td>";
					echo "<td>".$emp_master['Emp_Desig']."</td>";
					echo "<td>".$emp_master['Emp_Dept']."</td>";
					echo "<td>".$emp_master['Emp_Commit']."</td>";
					echo "<td>".$emp_master['Emp_Apex']."</td>";
					echo "<td>".$emp_master['Emp_Status']."</td>";
					

					//echo "<td><a href=\"edit.php?id=$emp_master[Emp_Code]\">Edit</a> | <a href=\"delete.php?id=$emp_master[Emp_Code]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>