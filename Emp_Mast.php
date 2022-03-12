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
    <link rel="stylesheet" href="style.css"
    <meta name="description" content="" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fulid" style="margin-top: 30PX;">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card" style="border-color:blue ;" >
                    <div class="card-header bg-info text-white">
                        <h> <b>Employee Master </b></h>
                    </div>
                    <div= class="card-body" style="background-color: #e9ecef;">
                        <form action="" method="POST" enctype="multipart/form-data" role="form" >
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="empno"> Employee Code</label>
                                                <input type="text" class="form-control"  name="empno" id="empno" size="5" required="">
                                                <span id="available"> </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="empname"> Employee Name</label>
                                                <input type="text" class="form-control" name="empname" id="empname" value="">
                                                <span id="available"> </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="designation">Designation </label>
                                            <select class="form-control" id="designation" name="designation">
                                                <option>--------Select Designation--------</option>
                                                <option>Assistant Executive </option>
                                                <option>Assistant </option>
                                                <option>Assistant- I </option>
                                                <option>Assistant- II </option>
                                                <option> Assistant- III  </option>
                                                <option>Assistant- IV </option>
                                                <option> Executive </option>
                                                <option>Jr. Executive </option>
                                                <option> HMV Driver </option>
                                                <option>LMV Driver Gr 3 </option>
                                                <option> Jr. Officer </option>
                                                <option> Officer </option>
                                                <option> Tech. Officer </option>
                                                <option> Sr. Vet. Officer </option>
                                                <option> Sr. Store Officer </option>
                                                <option> Sr. Tech. Officer </option>
                                                <option> OSD </option>
                                                <option>Astt. Manager </option>
                                                <option> Manager </option>
                                                <option>General Manager </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="department">Department</label>
                                                <select class="form-control" id="department" name="department">
                                                    <option>--------Select Department--------</option>
                                                    <option>Adminsitration</option>
                                                    <option>Accounts</option>
                                                    <option>Marketting</option>
                                                    <option>EDP</option>
                                                    <option>Plant</option>
                                                    <option>Project</option>
                                                    <option>Purchase</option>
                                                    <option>Procurement</option>
                                                    <option>Cooperative Department</option>
                                                    <option>AI & AHD </option>
                                                    <option>General </option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address"> Address </label>
                                                <textarea class="form-control" id="address" name="address" rows="4">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--display image-->
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="text-align: center;">
                                                <img id="img-upload" name="img-upload">
                                                <div id="tem_img">
                                                    <img src="Image/E-Avatar.jpg" alt="" width="280px" height="250px">
                                                    <!--------<input type ="submit" name="submit" value="upload File"/> --->
                                                   
                                                </div>
                                                <br> <br>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-info btn-file">
                                                            Select Employee Image(4X6) <input type ="file" name="uploadfile" value=""/>
                                                            
                                                            <!-- Original 
                                                                <input type="file" id="imgimp" name="file_img" value="upload">
                                                                <input class="input--style-1" type="file" placeholder="file" name="file"> -->
                                                        </span>
                                                    </span>
                                                    <input type="text" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Department-->
                                        <div class="col-md-12">
                                           <!--  <label for="department">Department</label>
                                            <select class="form-control" id="department" name="department">
                                                <option>--------Select Department--------</option>
                                                <option>Adminsitration</option>
                                                <option>Accounts</option>
                                                <option>Marketting</option>
                                                <option>EDP</option>
                                                <option>Plant</option>
                                                <option>Project</option>
                                                <option>Purchase</option>
                                                <option>Procurement</option>
                                                <option>Cooperative Department</option>
                                                <option>Cooperative Department</option>
                                            </select> -->
                                        </div>
                                    </div>
                                </div>
                                <!--Salary-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                        <label for="empmobile"> Contact Number </label>
                                                <input type="text" class="form-control"  name="empmobile" id="empmobile" size="5" required="">
                                     </div>
                                </div>

                                <!--Incentive-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="comm"> Is he Kaizen Committee Member </label>
                                        <select class="form-control" id="comm" name="comm" required="true">
                                            <option>No</option>
                                            <option>Yes</option>
                                        </select>
                                     </div>
                                </div>
                                <!--Language-->
                                <!-- <div class="col-md-4">
                                    <fieldset class="form-group">
                                        <p>Language</p>
                                        <div class="form-check-inline"> 
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="language[]" value="English">English
                                            </label>
                                        </div>
                                        <div class="form-check-inline"> 
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="language[]" value="hindi">Hindi
                                            </label>
                                        </div>
                                        <div class="form-check-inline"> 
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="language[]" value="gujarati">Gujarati
                                            </label>
                                        </div>
                                        ----> 
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="appex"> Is he Apex Forum  Member </label>
                                        <select class="form-control" id="appex" name="appex" required="true">
                                            <option>No</option>
                                            <option>Yes</option>
                                        </select>
                                     </div>
                                </div>



                                    
                                <!-----Button----->
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
            $emobile= $_POST['empmobile'];


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
                
                $query=" INSERT INTO kaizen.emp_master(Emp_Code,Emp_Name,Emp_Add,Emp_Desig,Emp_Dept,Emp_Commit,Emp_Apex,mobile,Emp_Img) VALUES('$code','$name','$add','$desig','$dept','$cmt','$Apx', '$emobile','$folder')";
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