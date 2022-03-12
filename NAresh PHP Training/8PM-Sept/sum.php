<?php 
$x = 100;
$value = 343;

function sumTwoNumber()
{
	$z = $GLOBALS['x'] + $GLOBALS['value'];
	echo $z;
}

sumTwoNumber();


?>