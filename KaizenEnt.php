<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title> Kaizan FormEntry </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styleview.scc">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
	</head>
	




<body>
		<table border="3" width="1300">
		
		<tr align="center">
			<td colspan="6" style="font-size:45px" background-color "#FFFFCC">Kaizen Entry Form</td>
		</tr>
		
		<tr>
			<td colspan="1" align="Right">Fomr No:</td>

			<td>	<input type="text" class="form-control"/></td>		
				    <td> Date:<input name="Txtdate" type="text" size="10" value=" <?php echo date("d.m.Y"); ?>" /></td>
		</tr>
		
		
		
		

<!--This  Block is for Employee Details and comes from Employee master -->
		<tr>
			<td colspan="3" > Employee No:<input type class="form-control" size="6"="text"/> Employee Name: <input type="text" size="40"/> Designation: <input type=		
					"text" size="20" />  Department: <input type="text" size="20"</td> Is it Group:<input type="checkbox" />
		</tr>
		<tr>
			<td colspan="3"> Employee No:<input type size="6"="text" disabled="disabled"/> Employee Name: <input type="text" size="40"/> Designation: <input type=
				 	"text" size="20" />  Department: <input type="text" size="20"</td> Any More:<input type="checkbox" />
		</tr>
		<tr>
			<td colspan="3"> Employee No:<input type size="6"="text" disabled="disabled"/> Employee Name: <input type="text" size="40"/> Designation: <input type=
					"text" size="20" />  Department: <input type="text" size="20"/> </td> 
		</tr>

		<tr>
		<td colspan="3"style="background-color: #9966FF; font-size:20px" align="Right" > Saving Amount:<input size ="6"type="text" </td>
		</tr>

		<tr>
				
				<td colspan="3" style="background-color: #FFFFCC; font-size:20px" align="center">                    Kaizen Details                     </td>
		</tr>

<!--This  Block is for Kaizen Details  -->
		<tr>
				<td colspan="2"  style="font-size:20px">Present Status:</td>
				<td colspan="2" style="font-size:20px">Difficulty:</td>
  <tr>
						<td colspan="2" rowspan="3">
							<textarea cols="65" rows="3"></textarea>						</td>
						<td colspan="2" rowspan="3">
							<textarea cols="65" rows="3"></textarea>						</td>
  </tr>
		</tr>
		
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td colspan="2" style="font-size:20px" >Your Effort: </td>
			<td colspan="3" style="font-size:20px"> Result:</td>
		</tr>
		<tr>
			<td colspan="2"  rowspan="3">
				<textarea cols="65" rows="3"></textarea>			</td>
			<td colspan="2" rowspan="3">
				<textarea cols="65" rows="3"></textarea>			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
<tr>
				<table border="4" width="1300">
							<tr>
								
								<td colspan="2"><input type="checkbox" value="Safety"/>Safety</td>
								<td colspan="2"><input type="checkbox" value="Waste"/>Reduction in Waste</td>
								<td colspan="2"><input type="checkbox" value="Improvment"/>Improvement In Procedures</td>
							</tr>
							<tr>
								
								<td colspan="2"><input type="checkbox" value="Quality"/>Quality</td>
								<td colspan="2"><input type="checkbox" value="Cost"/>Reduction in Cost</td>
								<td colspan="2"><input type="checkbox" value="Beauty"/>Beauty</td>
							</tr>
							<tr>
								
								<td colspan="2"><input type="checkbox" value="Satisfaction" />Customers' Satisfaction</td>
								<td colspan="2"><input type="checkbox" value="Machine"/>Maintenance of Machines</td>
								<td colspan="2"><input type="checkbox" value="Trust"/>Trust</td>
							</tr>
							<tr>
								<td colspan="3" align="center"><input type="button" value="Submit"/></td>
								<td colspan="3" align="center"><input type="button" value="Exit" /></td>
							</tr> 
				</table>	
</table>
</body>
</html>
