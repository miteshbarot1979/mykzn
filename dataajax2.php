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


if(isset($_REQUEST['sid'])){

$code = $_REQUEST['sid'];
    
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
$type="success2";
echo '{"type2" : "'.$type.'","status2" : "'.$status.'","code2" : "'.$code.'","empname2" : "'.$emp.'","empimage2" : "'.$empimage.'","empdesignation2" : "'.$empdesignation.'","empdept2" : "'.$empdept.'"}';
//echo '{"type" : "'.$type.'","status" : "'.$status.'","code" : "'.$code.'","empname" : "'.$emp.'","dept" : "'.$dept.'","desg" : "'.$desg.'"}';
exit(0);

?>
