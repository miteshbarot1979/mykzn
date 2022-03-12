<?php 
class Sample
{
	public $x = 100;
	public $y = 200;
	function welcome()
	{
		echo "Welcome to OOP's";
	}
}

$obj = new Sample();

$obj->welcome();

echo $obj->x;
echo $obj->y;

?>