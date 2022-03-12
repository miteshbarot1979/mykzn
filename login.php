<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>-:: Dairy Employee Login ::-</title>
    </head>
<body>
<center>
<form name="login" method="post" >
<table>
      <tr>
        <td colspan="4"><div align="center">
          <img src="image/logo-mitesh.jpg" alt="Kaizen" width="310" height="300"></img>
        </div></td>
      </tr>
    </table>
    <table width="300" border=4 cellpadding=10 cellspacing=-1 style="{border-color: #000000;border-collapse: collapse;}">
    <tr>

<table>
   
 <tr style="border-style:solid">
    <td width="110" rowspan="3"><img src="image/24.jpg" width="76" height="103"></td>
    <td colspan="3"><center><strong><u>Member Login </u></strong></center></td>
  </tr>
  <tr>
    <td align="right"><div align="right"><strong>Username</strong></div></td>
    <td align="center">:</td>
    <td align="left"><input name="myusername" type="text" id="myusername"  width="350" /></td>
  </tr>
  <tr> <td align="right" ><strong>Password</strong></td>  <td align="center">:</td> <td align="left"><input name="mypassword" type="password" id="mypassword" width="350" /></td>
  </tr> 
  <tr> <td colspan="4"><div align="center"> <input type="submit" name="Submit" value="Login" /> </div></td>  </tr>
    <tr> <td colspan=4 class="formblue" align="right"> <div align="center">Welcome have a smooth working  <br> 
      </div></td>
    </tr>
  <tr>
</table>
</td></tr>
</table>
<p><span style="font-size: xx-large;"><span style="color: #ff0000;">Vasudhara Dairy Internal Server </span></span></p>
</form>
<blockquote>&nbsp;</blockquote>
</center>

<?php
@session_start();
require("connect.php");
if(isset($_POST['Submit']))
{
$name = $_POST['myusername'];
$pass = $_POST['mypassword'];

$sql =mysqli_query($conn,"select * from members where username='$name' AND password='$pass'");
if(mysqli_num_rows($sql)==0)
{
	?>
	<script>
	alert("You seem to register first");
	</script>
	<?php
	
}else{
  $_SESSION['id']=$_POST['$name'];
  echo $name;
  $_SESSION['from_Login']=$name;
  header ('location:emp_mast.php')

	?>
	<script>
 
	window.alert("Welcome To Vasudhara Dairy Local Server");
	//window.location.href='/gcmmf/rate.php';

	</script>
	<?php
}
}
	?>
	
</body>
</html>
