<?php 
$folder = "images";

if(file_exists($folder))
{
	$dp = opendir($folder);
	while($file=readdir($dp))
	{
		$allowed_types=['jpg','png','jpeg','gif'];
		$arr = explode(".",$file);
		$ext = end($arr);
		
		if(in_array($ext,$allowed_types))
		{
			echo "<img src='images/$file' height='200' width='200'>";
		}
		
		
	}
}
else
{
	echo "Sorry! Unable open folder";
}
	


/*$folder = "js";
if(file_exists($folder))
{
	rmdir($folder);
	echo $folder." is deleted";
}
else{
	echo $folder." is already deleted...";
}
*/


/*
$folder = "images";
if(!file_exists($folder))
{
	mkdir($folder);
	echo $folder." is created";
}
else{
	echo $folder." is already created...";
}
*/
//echo file_exists("C:/Users/ram/Desktop/veda.txt");

/*
$file = "C:/Users/ram/Desktop/veda.txt";
if(file_exists($file))
{
	unlink($file);
	echo $file." is deleted successfully";
}
else
{
	echo $file." is not available to delete";
}
*/
//echo file_put_contents("hi.txt","welcome to Web Serbices");


//echo file_get_contents("http://nareshit.com");

//read the data from an URL, File, Web Services

//$fp = fopen("http://nareshit.com","r");

//echo fread($fp,1000000000);







/*
$fp = fopen("hi.txt","r");
for(;$line = fgetss($fp);)
{
	echo $line;
}
*/

//var_dump($line);



//echo fread($fp,filesize("hi.txt"));

//fopen("name of the file","file mode");

//$fp = fopen("welcome.pdf","w");
//echo fwrite($fp,"this is PHP");

//$fp = fopen("welcome.txt","a");

//echo fwrite($fp," Hello")

//echo fread($fp,20);

//$fp = fopen("welcome.txt","r");
//$size = filesize("hi.txt");
//echo fread($fp,$size);

?>