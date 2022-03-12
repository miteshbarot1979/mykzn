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
		/*$result = mysqli_query($con,"select users.id, users.username, users.email, users.mobile,orders.oid, orders.pname,orders.quantity, orders.price from users JOIN orders ON users.id = orders.id");*/
		
		$result = mysqli_query($con,"call getOrdersInfo()");
		
		if(mysqli_num_rows($result)>0)
		{
			?>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>OrderID</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
			</tr>
			<?php 
			while($row = mysqli_fetch_assoc($result))
			{
				?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['username'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['mobile'];?></td>
					<td><?php echo $row['oid'];?></td>
					<td><?php echo $row['pname'];?></td>
					<td><?php echo $row['price'];?></td>
					<td><?php echo $row['quantity'];?></td>
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