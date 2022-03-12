<?php 
class Welcome
{
	static $x = 100;
	
	static $y = 200;
	
	static function greeting()
	{
		echo "<p>This is Greeting</p>";
	}
}

Welcome::greeting();

echo Welcome::$x;
echo Welcome::$y;


?>