<?php
session_start();
require("connect.php"); 
$em1code= empty($_POST['Emp_code']) ? '' : $_POST['Emp_code'] ;
$sql = mysqli_query($conn,"select * from emp_master where emp_code = '$em1code'");
$r = mysqli_fetch_assoc($sql);
$em1code= $r['Emp_code'];
$em1_name= $r['Emp_name'];


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ganesh</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <body>
    <form method="POST" id="" >

       <center>DCS Information Insert</center>
        
        DCS Code:<input type="text" name="Emp_code" style="width:150px" /> </br>
        </br>
       
    </br>
        <input type="submit" name="go" value="Go" />

        <?php if(isset($_POST['go']))
         {
            ?>
            DCS Code:<input type="text" name="Emp_code" value="<?php echo $em1code;?>" style="width:150px" /> </br>
        </br>
             DCS Name:<input type="text" name="Emp_Name" value="<?php echo $em1_name;?>" style="width:150px" />   
            <?php
            }
            ?>
     </form>
        <script src="" async defer></script>
    </body>
</html>