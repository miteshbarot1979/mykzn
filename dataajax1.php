<?php
include("connect.php");
//$servername = "localhost";
//$username = "vishal";
//$password = "vishal";
//$dbname = "mitesh";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$code =0;
$emp =0;
$empimage=0;
$empdesignation=0;
$empdept=0;


if(isset($_REQUEST['id'])){

$code = $_REQUEST['id'];
    
$sql = "SELECT * FROM emp_master where Emp_Code=".$code;
$result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
   
      while($row = $result->fetch_assoc()) {
       $code = $row["Emp_Code"];
       $emp  = $row["Emp_Name"];
       $empimage= $row["Emp_Img"];
       $empdesignation= $row["Emp_Desig"];
       $empdept = $row["Emp_Dept"];


          // $dept  = $row["dept"];
           //$desg  = $row["desg"];
          
       $status=1;
      }
  }
    else{
        
         $status=0;
    }
}
$type="success";
echo '{"type" : "'.$type.'","status" : "'.$status.'","code" : "'.$code.'","empname" : "'.$emp.'","empimage" : "'.$empimage.'","empdesignation" : "'.$empdesignation.'","empdept" : "'.$empdept.'"}';
//echo '{"type" : "'.$type.'","status" : "'.$status.'","code" : "'.$code.'","empname" : "'.$emp.'","dept" : "'.$dept.'","desg" : "'.$desg.'"}';
exit(0);

?>
