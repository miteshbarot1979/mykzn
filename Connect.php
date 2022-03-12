<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kaizen";

$conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn)
    {
          echo "Connection Established";
          mysqli_select_db($conn, "$dbname") or die(mysqli_connect_error());
    }
    else
    {
        die("Connection Failed because".mysqli_connect_error());
    }
?>


