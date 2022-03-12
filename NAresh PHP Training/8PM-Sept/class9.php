<?php 
abstract class Mobile
{
	abstract function measures();
	function welcome()
	{
		echo "<p>Welcome to Mobile</p>";
	}
}

class BSNL extends Mobile
{
	function measures()
	{
		echo "BSNL measures implemented";
	}
}

$obj = new BSNL();

$obj->measures();
$obj->Welcome();



class Airtel extends Mobile
{
	function measures()
	{
		echo "Airtel measures implemented";
	}
}

$ob1 = new Airtel();
$ob1->measures();
$ob1->Welcome();







?>