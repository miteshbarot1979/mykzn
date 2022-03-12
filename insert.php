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

<script language="javascript">
     var form = document.getElementById("myForm");
       form.onsubmit = function(){
        form.reset();
      }
  function validate()
{
		if(dcs_code=='')
		{
			window.alert("Please Enter DCS code!");
			document.reg.dcs_code.focus();
			return false;
		}
		else
		{
			filter_var(dcs_code,FILTER_VALIDATE_INT, array("min_range"=>4,"max_range"=>4));
			window.alert("Please Enter DCS code only integer!");
		} 
}
</script>

</head>

<body topmargin="0" bottommargin="0" bgcolor="#fff">

<table bgcolor="#FFCCFF" style="margin-top:0" align="center" width="800px" border="1" cellpadding="0" cellspacing="0">
<tr><td height="5px" align="center" bgcolor="#330000" colspan="7">
<h1 style="text-align:center; color:#FFFFFF; font-family:Verdana, Geneva, sans-serif; margin-top:3px">

Welcome To Search Information</h1></td></tr>


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


</br>
<tr bgcolor="#FFFFF" align="center" style="color:red; font-size:18px; font-weight:bold;"rowspan="2"><td bgcolor="#CCFF33"><p></p></td></tr>
<tr bgcolor="#FFFFF" align="center" style="color:maroon; font-size:18px;  font-weight:bold;" rowspan="2"><td><br>
<input type="submit" name="submit" value="INSERT" onclick="cls()"/></br></br>
</td></tr>


</form>
</table>


</body>
</html>
