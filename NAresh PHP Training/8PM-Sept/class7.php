<?php
class Father
{
	private function money()
	{
		echo "<p>I have 10L Money</p>";
	}
	function vehicles()
	{
		echo "<p>I have 2 cars</p>";
	}
	function mother()
	{
		$this->money();
	}
}

class Child extends Father
{
	function money()
	{
		parent::mother();
		echo "<p>Child have 5L money </p>";
	}
}

$obj = new Child();
$obj->money();
$obj->vehicles();

?>