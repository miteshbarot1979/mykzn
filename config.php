<?php
//$db_host        = 'localhost';
//$db_user        = 'root';
//$db_pass        = ' ';
//$db_database    = 'dcs_from';  

/* End config */

// This is original 
// $link = @mysql_connect($db_host,$db_user,$db_pass,$db_database) or die('Unable to establish a DB connection');  

// modified for Xampp

//$conn=mysqli_connect($db_host ,$db_user,$db_pass,$db_database);

//mysql_set_charset('utf8');
//mysql_select_db($db_database,$link);

$servername="localhost";
$username="root";
$password="";
$dbname="kaizen";

$conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn)
    {
        echo "Connection Established";
     
    }
    else
    {
        die("Connection Failed because".mysqli_connect_error());
        
    }


?>
