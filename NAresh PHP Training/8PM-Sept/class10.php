<?php
interface Mobile
{
	function measures();
	function welcome();
}

class BSNL implements Mobile
{
	function measures()
	{
		echo "<p>BSNL Implemeneted</p>";
	}
	function welcome()
	{
		echo "<p>Welcome to Mobile</p>";
	}
}

$obj = new BSNL();
$obj->measures();
$obj->welcome();


 ?>