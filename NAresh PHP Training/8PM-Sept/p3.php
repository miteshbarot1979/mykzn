<?php session_start();?>
<html>
	<head>
		<title>Session and Cookie</title>
	</head>
	<body>
		<h1>Person3</h1>
		<form method="POST" action="p4.php">
			Number3:<input type="text" name="num3" />
			<input type="submit" value="Go">
		</form>
	</body>
</html>
<?php //setcookie("number2",$_POST['num2']);
$_SESSION['number2'] = $_POST['num2'];
?>