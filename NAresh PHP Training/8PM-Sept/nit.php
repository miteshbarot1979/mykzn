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
				.blocks{
					display:flex;
				}
				.blocks div{
					border:3px solid red;
					padding: 10px;
				}
			</style>
		</head>
			<body>
				<div class="blocks">
					<?php 
					foreach($data as $user)
					{
						?>
							<div>
								<p>Name: <?php echo $user['username'];?></p>
								<p>Email: <?php echo $user['email'];?></p>
								<p>Mobile: <?php echo $user['mobile'];?></p>
							</div>
						<?php
					}
					?>
				</div>
			</body>
	</html>
	<?php
}
else
{
	echo "<p>Sorry! No users Found</p>";
}

?>