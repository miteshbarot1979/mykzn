<?php 
class Users
{
	private $con = null;
	
	function __construct(){
		$this->con = mysqli_connect("localhost","root",'',"8pmoct") or die("Unbale to connect");
	}
	function __destruct()
	{
		mysqli_close($this->con);
	}
	function getAllUsers()
	{
		$result = mysqli_query($this->con,"select id, username, email,mobile from users");
		
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$data[] = $row;
			}
		}
		else{
			$data = [];
		}
		
		return $data;
	}
	
	function activeUsers()
	{
		$result = mysqli_query($this->con,"select id, username, email,mobile from users where status ='active'");
		
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$data[] = $row;
			}
		}
		else{
			$data = [];
		}
		
		return $data;
	}
	
	function inActiveUsers()
	{
		
		$result = mysqli_query($this->con,"select id, username, email,mobile from users where status ='inactive'");
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$data[] = $row;
			}
		}
		else{
			$data = [];
		}
		return $data;
	}
	
}

?>