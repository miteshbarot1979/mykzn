<?php
session_start();

require("config.php"); 
$dcs_code= empty($_POST['dcs_code']) ? '' : $_POST['dcs_code'] ;
$sql = mysqli_query($conn,"select * from dcs_master where dcs_code = '$dcs_code'");
$r = mysqli_fetch_array($sql);
$dcs_code = $r['dcs_code'];
$dcs_name = $r['dcs_name'];
$dcs_village = $r['dcs_village'];
$dcs_taluka = $r['dcs_taluka'];
$dcs_district = $r['dcs_district'];

?>
<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: DCS  Information ::</title>
<!--<link rel="stylesheet" href="style.css" />-->
<style>
.table tr td {
	border-bottom-width: 1px;
	border-right-width: 1px;
	border-bottom-style: solid;
	border-right-style: outset;
	border-right-color: darkred;
	border-bottom-color: darkred;
}

.table {
	border-left-width: 1px;
	border-top-width: 1px;
	border-left-style: outset;
	border-top-style: solid;
	border-left-color: darkred;
	border-top-color: darkred;
	font-size: 16px;
}
a{
	background-color:#3366FF;
	text-align:center;
	text-decoration:none;
	font-family:Verdana, Geneva, sans-serif;
	color:#FFF;
	border:groove;
    font-weight:550;
}
</style>
<script language="javascript">
   
      var form = document.getElementById("myForm");
       form.onsubmit = function(){
        form.reset();
      }
    

  function validate()
{


  var sec_name=document.reg.sec_name.value;
  var Chair_name=document.reg.chair_name.value;
  var sec_contact=document.reg.sec_contact.value;
  var chair_contact=document.reg.chair_contact.value;
  var male_emp=document.reg.male_emp.value;
  var female_emp=document.reg.female_emp.value;
  var male_member=document.reg.male_member.value;
  var female_member=document.reg.female_member.value;
     

if(dcs_code=='')
  {
	window.alert("Please Enter DCS code!");
    document.reg.dcs_code.focus();
    return false;

 }else
 {
	 filter_var(dcs_code,FILTER_VALIDATE_INT, array("min_range"=>4,"max_range"=>4));
	 window.alert("Please Enter DCS code only integer!");
 }

 if(sec_name=='')
  {
    window.alert("Please Enter Secratory name!");
    document.reg.sec_name.focus();
    return false;

 }
 
 if(sec_contact=='')
  {
    window.alert("Please Enter Secratory contact!");
    document.reg.sec_contact.focus();
    return false;

 }

 if(chair_name=='')
  {
    window.alert("Please Enter Chairman name!");
    document.reg.chair_name.focus();
    return false;

 }
 if(chair_contact=='')
  {
    window.alert("Please Enter Chairman contact!");
    document.reg.chair_contact.focus();
    return false;

 }

 if(male_emp=='')
  {
    window.alert("Please Enter Male employee!");
    document.reg.male_emp.focus();
    return false;

 }
 if(female_emp=='')
  {
    window.alert("Please Enter Female employee!");
    document.reg.female_emp.focus();
    return false;

 }

 if(male_member=='')
  {
    window.alert("Please Enter Male member!");
    document.reg.male_member.focus();
    return false;

 }

 if(female_member=='')
  {
    window.alert("Please Enter Female member!");
    document.reg.female_member.focus();
    return false;

 }


}

</script>

</head>

<body topmargin="0" bottommargin="0" bgcolor="#fff">

<table bgcolor="#FFCCFF" style="margin-top:0" align="center" width="800px" border="1" cellpadding="0" cellspacing="0">
<tr><td height="5px" align="center" bgcolor="#330000" colspan="7">
<h1 style="text-align:center; color:#FFFFFF; font-family:Verdana, Geneva, sans-serif; margin-top:3px">

Welcome To Dairy Committee Socity Information</h1></td></tr>

<tr bgcolor="#FFFFFF" style="padding-left:0px;">

<td bgcolor="#FFFFF" align="center" style="color:maroon; font-size:18px; font-weight:bold;" colspan="7">|| <b><?php echo date("D d-M-Y");?></b> ||
 <span >TIME: - </span>
 <span display:table" id="clock">

		
<script type="text/javascript">
			var lastText = "";
			
			function updateClock() {
				var d = new Date();
				var s = "";
				s += (10 > d.getHours()   ? "0" : "") + d.getHours()   + ":"
				s += (10 > d.getMinutes() ? "0" : "") + d.getMinutes() + ":"
				s += (10 > d.getSeconds() ? "0" : "") + d.getSeconds();
				
				if (lastText != s) {
					setText("clock", s);
					lastText = s;
				}
				
			}
			
			function setText(elemName, text) {
				var elem = document.getElementById(elemName);
				while (elem.childNodes.length > 0)
					elem.removeChild(elem.firstChild);
				elem.appendChild(document.createTextNode(text));
			}
			
			updateClock();
			setInterval(updateClock,100);
		</script>
<script language="JavaScript" type="text/javascript">
 var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December"); 

var TODAY =d.getDate() +"- " + monthname[d.getMonth()] + "-" + d.getFullYear();

 document.write(TODAY);
</script>
</span>
</td> </tr>

<form method="POST" id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="f2" onSubmit="return validate()">

<tr bgcolor="#FFFFF" align="center" style="color:red; font-size:18px; font-weight:bold;"rowspan="2"><td bgcolor="#CCFF00"><center>DCS Information Insert</center></td></tr>
<tr bgcolor="#FFFFF" style="color:maroon; font-size:18px; font-weight:bold;" rowspan="2"><td><br>
&nbsp;&nbsp;&nbsp;&nbsp;DCS Code:<input type="text" name="dcs_code" value="<?php echo $dcs_code;?>" style="width:150px" /><input type="submit" name="go" value="Go" />
<?phpif(isset($_POST['go']))
 { 
?>
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;Name:<input type="text" name="dcs_name" value="<?php echo $dcs_name;?>"  readonly="readonly" style="width:400px" />
</br></br>&nbsp;&nbsp;&nbsp;&nbsp;
Village:<input type="text" name="dcs_village" value="<?php echo $dcs_village;?>"  readonly="readonly" style="width:130px" />&nbsp;
Taluka:  <input type="text" name="dcs_taluka" value="<?php echo $dcs_taluka;?>"  readonly="readonly" style="width:130px" />&nbsp;
District:<input type="text" name="dcs_district" value="<?php echo $dcs_district;?>"  readonly="readonly" style="width:130px" /></br><br>
<?
 }
 ?>
</td></tr>


</br></td></tr>
<tr bgcolor="#FFFFF" align="center" style="color:red; font-size:18px; font-weight:bold;"rowspan="2"><td bgcolor="#CCFF33"><p></p></td></tr>
<tr bgcolor="#FFFFF" align="center" style="color:maroon; font-size:18px;  font-weight:bold;" rowspan="2"><td><br>
<input type="submit" name="submit" value="INSERT" onclick="cls()"/></br></br>
</td></tr>

<tr bgcolor="#FFFFF" align="center" style="color:red; font-size:18px; font-weight:bold;"rowspan="2"><td bgcolor="#CCFF33"><p></p></td></tr>
<tr bgcolor="#FFFFF" align="center" style="color:maroon; font-size:18px;  font-weight:bold;" rowspan="2"><td bordercolor="#000000" bgcolor="#CC00FF" colspan="7"><br>
<a href='index.php'>HOME</a>&nbsp&nbsp<a href='update.php'>UPDATE</a>&nbsp&nbsp<a href='delete.php'>DELETE</a>&nbsp&nbsp<a href='search.php'>SEARCH</a>
<br></br></td></tr> 

</form>
</table>
<?php
require("config.php");  
	$dcs_code = $_POST['dcs_code'];
	
	
	

if(isset($_POST['submit']))
 {

	$sql2 = mysqli_query($conn,"select * from dcs_emp_master where dcs_code='$dcs_code'");
	if(mysqli_num_rows($sql2)==0)
	{
	
	// $q1=mysql_query("insert into dcs_emp_master(dcs_code,sec_name,sec_contact,chair_name,chair_contact,male_emp,female_emp,total_emp,male_member,female_member,total_member)values('".$dcs_code."','".$sec_name."','".$sec_contact."','".$chair_name."','".$chair_contact."','".$male_emp."','".$female_emp."','".$total_emp."','".$male_member."','".$female_member."','".$total_member."')");
	$q1=mysqli_query($conn,"insert into dcs_emp_master values('$dcs_code','$sec_name','$sec_contact','$chair_name','$chair_contact','$male_emp','$female_emp','$total_emp','$male_member','$female_member','$total_member')");
	$dcs_code = mysqli_insert_id();
	$history = $dcs_code.'user_history';
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Record Successfully insert')
    window.location.href='insert.php';
    </SCRIPT>");	
	}
	
	else
	{
		
      //  <script>
		echo "This dcs_code Record is already insert ";
	//	</script>
        
		
	}
 }
?>

</body>
</html>
