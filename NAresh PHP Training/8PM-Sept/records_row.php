<?php 
include("connection.php");
?>
<html>
	<head>
		<title>Fetching Enquiries</title>
		<style>
			body{
				background-color: #d4d4d4;
			}
		</style>
	</head>
	<body>
		<h1>Enquiry List</h1>
		
		<?php 
		$result = mysqli_query($con,"select *from enquiries");
		if(mysqli_num_rows($result)>0)
		{
			?>
			<table border="1">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Message</th>
				</tr>	
				<?php 
				while($row = mysqli_fetch_row($result))
				{
					?>
					<tr>
						<td><?php echo $row[0]; ?></td>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
						<td><?php echo $row[3]; ?></td>
						<td><?php echo $row[4]; ?></td>
					</tr>

					<?php
				}
				?>
			</table>
			<?php
		}
		else
		{
			echo "<p>Sorry! no records Found</p>";
		}
		?>
	</body>
</html>
<?php mysqli_close($con);?>