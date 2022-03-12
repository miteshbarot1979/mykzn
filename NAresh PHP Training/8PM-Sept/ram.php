<?php 
include("users.php");
$obj = new Users();
$data = $obj->getAllUsers();

if(count($data)>0)
{
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
				<table border="1">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
					</tr>
					<?php 
					for($i = 0; $i < count($data); $i++)
					{
						?>
							<tr>
								<td><?php echo $data[$i]['id']; ?></td>
								<td><?php echo $data[$i]['username']; ?></td>
								<td><?php echo $data[$i]['email']; ?></td>
								<td><?php echo $data[$i]['mobile']; ?></td>
							</tr>
						<?php
					}
					?>
				</table>
			</body>
	</html>
	<?php
}
else
{
	echo "<p>Sorry! No users Found</p>";
}


?>