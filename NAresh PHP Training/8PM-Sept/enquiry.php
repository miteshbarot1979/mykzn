<?php 
include("connection.php");
?>
<html>
	<head>
		<title>Enquiry Form</title>
		<style>
			.formcontrol{
				height:36px;
				border:2px solid #333;
				width:100%;
				border-radius: 10px;
			}
			.formgroup{
				padding: 10px 0px;
			}
			.container{
				width:70%;
				margin:0px auto;
			}
		</style>
	</head>
	<body>
	<div class="container">
		<h1>Enquiry Form</h1>
		
		<?php 
		
		if(isset($_COOKIE['success']))
		{
			echo "<p>".$_COOKIE['success']."</p>";
		}
		if(isset($_COOKIE['error']))
		{
			echo "<p>".$_COOKIE['error']."</p>";
		}
		
		if(isset($_POST['save']))
		{
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$mob = $_POST['mobile'];
			$message = $_POST['msg'];
			
			mysqli_query($con,"INSERT INTO enquiries values('','$name','$email','$mob','$message')");
			
			if(mysqli_affected_rows($con) == 1 )
			{
				setcookie("success","Thanks, We will get back you soon", time()+3);
				header("Location: enquiry.php");
			}
			else
			{
				setcookie("error","Sorry! Unable to submit your enquiry", time()+3);
				header("Location: enquiry.php");
			}
			
			
		}
		?>
		
		<form method="POST" action="" onsubmit="return validateForm()">
			
			<div class="formgroup">
				<label>Name:</label>
				<input type="text" name="name" id="name" class="formcontrol" />
			</div>
			
			<div class="formgroup">
				<label>Email:</label>
				<input type="text" name="email" id="email" class="formcontrol" />
			</div>
			
			<div class="formgroup">
				<label>Mobile:</label>
				<input type="text" name="mobile" id="mobile" class="formcontrol" />
			</div>
			
			<div class="formgroup">
				<label>Message:</label>
				<textarea id="msg" name="msg" class="formcontrol"></textarea>
			</div>
			
			<div class="formgroup">
				<input type="submit" name="save" value="Send"/>
			</div>
		</form>
		</div>
		
		<script>
			function validateForm()
			{
				var name = document.getElementById("name").value;
				if(name == "")
				{
					alert("Enter Name Field");
					return false;
				}
				
				var email = document.getElementById("email").value;
				if(email == "")
				{
					alert("Enter Email Field");
					return false;
				}
				
			}
		</script>
	</body>
</html>
<?php 
mysqli_close($con);
?>