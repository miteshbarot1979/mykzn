<?php
require_once ('Connect.php');
$sql = "SELECT * from `emp_master` WHERE emp_master.emp_code = emp_code";


//$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$code = mysqli_real_escape_string($conn, $_POST['Emp_code']);
	$name = mysqli_real_escape_string($conn, $_POST['Emp_Name']);
	$add = mysqli_real_escape_string($conn, $_POST['Emp_Add']);
	$Desigation = mysqli_real_escape_string($conn, $_POST['Emp_Desig']);
	$Department = mysqli_real_escape_string($conn, $_POST['Emp_Dept']);
	$Commitee = mysqli_real_escape_string($conn, $_POST['Emp_Commit']);
	$Appex = mysqli_real_escape_string($conn, $_POST['Emp_Apex']);
	//$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	//$nid = mysqli_real_escape_string($conn, $_POST['nid']);
	//$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	//$degree = mysqli_real_escape_string($conn, $_POST['degree']);
	//$salary = mysqli_real_escape_string($conn, $_POST['salary']);





	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");


$result = mysqli_query($conn, "UPDATE `emp_master` SET `emp_name`='$name',`Emp_add`='$add',`Emp_Desig`='$Designation',`Emp_Dept`='$Department',`Emp_Commit`='$Commitee',`Appex`='$Emp_apex' WHERE Emp_code=$code");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$code = (isset($_GET['Emp_code']) ? $_GET['Emp_code'] : '');
	$sql = "SELECT * from `emp_master` WHERE Emp_code=$code";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
    $name = $res['Emp_name'];
    $add = $res['Emp_add'];
    $Designation = $res['emp_deisg'];
	$Department = $res['emp_dept'];
    $commitee = $res['emp_commit'];
    $Appex = $res['emp_Apex'];
}
}

?>

<html>
<head>
	<title>View Employee |  Admin Panel | Vasudhara Dairy</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>Vasudhara Dairy</h1>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Employee Data </h2>
                    <form id = "registration" action="edit.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="Name" value="<?php echo $name;?>" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="adderess" value="<?php echo $add;?>">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="email"  name="Designation" value="<?php echo $Designation;?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="Department" value="<?php echo $Department;?>">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
									<input class="input--style-1" type="text" name="Comm" value="<?php echo $commitee;?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" name="Appex" value="<?php echo $Appex;?>">
                        </div>

                        </div>
                        <input type="hidden" name="id" id="textField" value="<?php echo $code;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
