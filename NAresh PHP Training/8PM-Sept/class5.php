<?php 
class Welcome
{
	function test()
	{
		echo "<p>This is Test function</p>";
	}
	
	function greeting()
	{
		echo "<p>This is Greeting funnction</p>";
	}
	
	function bye()
	{
		echo "<p>This is Bye function</p>";
	}
	function __construct()
	{
		echo "<p>This is Constructor </p>";
	}
	function __destruct()
	{
		echo "<p>This is Destructor</p>";
	}
}

$obj = new Welcome();
$obj->test();
$obj->bye();









?>