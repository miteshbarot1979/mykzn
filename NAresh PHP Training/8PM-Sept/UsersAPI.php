<?php 
class UsersAPI
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

$obj = new UsersAPI();

if(isset($_REQUEST["token"]) && !empty($_REQUEST["token"]))
{
	if($_REQUEST['token'] === "allusers")
	{
		echo json_encode($obj->getAllUsers());
	}
	else if($_REQUEST['token'] === "activeusers")
	{
		echo json_encode($obj->activeUsers());
	}
	else if($_REQUEST['token'] === "inactiveusers")
	{
		echo json_encode($obj->inActiveUsers());
	}
	else
	{
		echo json_encode(["message"=>"Sorry! No records found"]);
	}
}












?>