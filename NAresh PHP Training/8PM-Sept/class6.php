<?php 
class Sample
{
	private $con = null;
	public function connection()
	{
		$this->con = mysqli_connect("localhost","root","","8pmoct");
		return $this->con;
	}
}

$obj = new Sample();
print_r($obj->connection());

?>