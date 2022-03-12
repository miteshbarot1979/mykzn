<?php session_start();?>
<html>
	<head>
		<title>Session and Cookie</title>
	</head>
	<body>
		<h1>Person2</h1>
		<form method="POST" action="p3.php">
			Number2:<input type="text" name="num2" />
			<input type="submit" value="Go">
		</form>
	</body>
</html>

<?php //setcookie("number1",$_POST['num1']);

$_SESSION['number1'] = $_POST['num1'];

?>