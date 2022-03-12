<?php 
include("connection.php");
?>
<html>
	<head>
		<title>Fetching Data By using ASSOC</title>
		<style>
			body{
				background-color: #efefef;
			}
		</style>
	</head>
	<body>
		<h1>Fetching Enquiries</h1>
		<?php 
		$result = mysqli_query($con,"select *from enquiries");
		if(mysqli_num_rows($result)>0)
		{
			?>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Message</th>
				<th>Mobile</th>
			</tr>
			<?php 
			while($row = mysqli_fetch_assoc($result))
			{
				?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['message'];?></td>
					<td><?php echo $row['mobile'];?></td>
				</tr>
				<?php
			}
			?>
		</table>
			<?php
		}
		else
		{
			echo "<p>Sorry! No Records Found to display</p>";
		}
		?>
		
	</body>
</html>
<?php 
mysqli_close($con);
?>