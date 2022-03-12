<?php 
class Base
{
	private $con = null;
	function connect()
	{
		$this->con = mysqli_connect("localhost","root","","8pmoct");
		return $this->con;
	}
}
class Sub extends Base
{
	private $con = null;
	function connect()
	{
		$this->con = mysqli_connect("localhost","root","","8pJuly");
	}
}

?>