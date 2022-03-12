<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!-<![endif]--->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shree Ganesh</title>
    
    
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!------- jQuery library -->
    
    <script src="jquery.min.js"></script>
    
    

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fulid" style="margin-top: 10PX;">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card" style="border-color:blue ;" >
                    <div class="card-header bg-info text-white">
                        <h> <b>Kaizen Entry Form </b></h>
                    </div>
                    <div= class="card-body" style="background-color: #e9ecef;">
                        <form action="" method="POST" enctype="multipart/form-data" role="form" >
                            <div class=col-xs-2>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <table>
                                                <tr>
                                                   <td>
                                                        <label for="empno"> Employee Code</label>
                                                        <input type="text" class="form-control"  name="empno" id="empno"  required="">
                                                        <label for="empname"> Employee Name</label>
                                                        <input type="text" class="form-control"  name="empname" id="empname"  required="">
                                                        <label for="empdesig"> Employee Designation </label>
                                                        <input type="text" class="form-control"  name="empdesig" id="empdesig" required="">
                                                        <label for="empdept"> Employee Department </label>
                                                        <input type="text" class="form-control"  name="empdept" id="empdept"  required="">
                                                </td>
                                                </tr>    
                                                
                                            </table>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <table>
                                                <tr>
                                                   <td>
                                                        <label for="empno"> Employee Code</label>
                                                        <input type="text" class="form-control"  name="empno" id="empno"  required="">
                                                        <label for="empname"> Employee Name</label>
                                                        <input type="text" class="form-control"  name="empname" id="empname"  required="">
                                                        <label for="empdesig"> Employee Designation </label>
                                                        <input type="text" class="form-control"  name="empdesig" id="empdesig" required="">
                                                        <label for="empdept"> Employee Department </label>
                                                        <input type="text" class="form-control"  name="empdept" id="empdept"  required="">
                                                </td>
                                                </tr>    
                                            </table>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <table>
                                                <tr>
                                                   <td>
                                                        <label for="empno"> Employee Code</label>
                                                        <input type="text" class="form-control"  name="empno" id="empno"  required="">
                                                        <label for="empname"> Employee Name</label>
                                                        <input type="text" class="form-control"  name="empname" id="empname"  required="">
                                                        <label for="empdesig"> Employee Designation </label>
                                                        <input type="text" class="form-control"  name="empdesig" id="empdesig" required="">
                                                        <label for="empdept"> Employee Department </label>
                                                        <input type="text" class="form-control"  name="empdept" id="empdept"  required="">
                                                </td>
                                                    
                                                </tr>    
                                            </table>
                                            </div>
                                        </div>
                                        
                                <div class="col-md-12" style="text-align: center;">
                                    <input type="submit" id="insert" name="insert" value="Insert" class="btn btn-primary" style="width: 100px; border-radius: 10px;">
                                    &nbsp;&nbsp;
                                    <input type="submit" id="reset" name="btn" value="Cancel" class="btn btn-warning" style="width: 100px; border-radius: 10px;">
                                    &nbsp;&nbsp;
                                    <button onclick="window.location.reload(true)" class="btn btn-success" style="width: 100px; border-radius: 10px;" >Refresh</button>
                                    
                                </div>

                            </div>
                        </form>
                </div>
            </div>
            <br><br>
        </div>
    </div>

    </div>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <script src="" async defer></script>



    <?php
    include("Connect.php");
    error_reporting(0);

        if ($_POST['insert'])
        {
            
            $code = $_POST['empno'];
            $name = $_POST['empname'];
            $desig= $_POST['designation'];
            $dept = $_POST['department'];
            $add  = $_POST['address'];
            $Apx  = $_POST['appex'];
            $cmt  = $_POST['comm'];
            $myemg= $_POST['file_img'];


            $filename = $_FILES["uploadfile"] ["name"];
            $tempname = $_FILES["uploadfile"] ["tmp_name"];
            //echo $filename;
            //echo $tempname;
            $folder = "Image/".$filename;
            move_uploaded_file($tempname,$folder);
            echo "<img src='$folder' height='100' width='100'/>";



           // echo  $code,$name,$desig,$dept,$add,$Apx,$cmt;

            //echo $msprice,$mbprice, $mcprice, $mhavg, $mhexp, $mhexp, $mbhcur, $mbhexp, $mbhprice;

            if($code!="" && $name!="" && $desig!="" && $dept!="" && $add!="" && $Apx!="" && $cmt!="")
            {
                
                $query=" INSERT INTO kaizen.emp_master(Emp_Code,Emp_Name,Emp_Add,Emp_Desig,Emp_Dept,Emp_Commit,Emp_Apex,Emp_Img) VALUES('$code','$name','$add','$desig','$dept','$cmt','$Apx','$folder')";
                $data=mysqli_query($conn,$query);

                echo $data;

                if($data)
                {
                    echo "Record of '$name' is inserted into Database";
                    ?>
                    <script>
                       window.alert("Record Saved Succefully");
                    </script>

                    <?php
                }
            }
            else
            {
                echo "All fields are required";
            }
        }

        // for Delete all the raw from the SQL is ----->>>>> SELECT * FROM ganesh_sc.gcmmf_pcm; 
            
?>

</body>

</html>