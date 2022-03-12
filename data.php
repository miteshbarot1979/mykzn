<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Code to Fetch All Data from MySQL Database and Display in html Table</title>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Eform.css"/>
</head>
<body>
    <div id="emp_det" class="form-group">
                                    <div id="f_emp" class="col-md-6">
                                        <form id="form1" name="form1" method="post">
                                        <div class="col-xs-6">
                                            
                                            <label for="Emp1">First Employee Code*</label> 
                                        <input class="form-control" id="e1code" name="e1code" required placeholder="000">
                                        </div>        
                                        <div class="col-xs-8">
                                            <input class="form-control" id="e1name" name="e1name" value= "<?php  echo $result['$emp']; ?>">
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control" id="e1desig" name="e1desig" value= "<?php  echo $result['$desg'];?>">
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control" id="e1dept" name="e1dept" value="<?php  echo $result['$dept'];?>" >
                                        </div>   
                                        <div id="avatar1">
                                                                                                               
                                        </div> 
                                        <div class="col-md-12 text-center">
                                            <button type="button" id="btn1" name="btnm" class="btn btn-primary">Submit</button>
                                        </div>  
                                        </form>
                                    </div>
                                     <!--<This is for calling Employee Data"></script> -->
                       
                                    <div id="s_emp"class="col-md-6">
                                         <form id="form2" name="form2" method="post">
                                        <div class="col-xs-6">
                                            <label for="Emp2">Second Employee Code*</label> 
                                            <input class="form-control" id="e2code" name="e2code" required placeholder="582">
                                        </div>        
                                        <div class="col-xs-8">
                                            <input class="form-control" id="e2name" name="e2name" required placeholder="Mitesh B Barot">
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control" id="e2desig" name="e2desig" required placeholder="Officer">
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control" id="e2dept" name="e2dept" required placeholder="Milk Procurement">
                                        </div>   
                                        <div id="avatar2">
                                           
                                        </div> 
                                        
                                            <div class="col-md-12 text-center">
                                                <button type="button" id="btn2" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        

                                    </div>
                                    <div id="t_emp" class="col-md-6">
                                        <form id="form3" name="form3" method="post">
                                        <div class="col-xs-6">
                                            <label for="Emp3">Third Employee Code*</label> 
                                            <input class="form-control" id="e3code" name="e3code" required placeholder="582">
                                        </div>        
                                        <div class="col-xs-8">
                                            <input class="form-control" id="e3name" name="e3name" required placeholder="Mitesh B Barot">
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control" id="e3desig" name="e3desig" required placeholder="Officer">
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control" id="e3dept" name="e3dept" required placeholder="Milk Procurement">
                                        </div>   
                                        <div id="avatar3">
                                           
                                        </div> 
                                        
                                        <div class="col-md-12 text-center">
                                            <button type="button" id="btn3" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                    </div>

                                </div>
<input class="form-control" id="data" name="data" value= "">
<script type="text/javascript">
$(document).ready(function($){
    
$('#btn1').on('click', function () {
    
   var id= document.getElementById("e1code").value;
   
   
        $.ajax({
        type:"POST",
        url: "dataajax1.php",
        data: { id: id },
        dataType: 'json',
        success: function(res){

        alert(JSON.stringify(res));

          var obj = JSON.parse(JSON.stringify(res));
            alert(obj.status);
           // alert(obj.code);
            // alert(obj.empname);
              alert(obj.dept);
        if(obj.status==1){
           
           
            $('#e1name').val(obj.empname);
            //$('#dept').val(obj.dept);
            //$('#desg').val(obj.desg);


           
           if (confirm("Do you want to search another record!")) {
            document.getElementById('btn1').style.visibility = 'hidden';
                document.getElementById("e2code").focus();
               $('#btn2').on('click', function () {
                var sid= document.getElementById("e2code").value;
               alert(sid);
                 $.ajax({
        type:"POST",
        url: "dataajax2.php",
        data: { sid: sid },
        dataType: 'json',
        success: function(res2){

        alert(JSON.stringify(res2));

          var obj2 = JSON.parse(JSON.stringify(res2));
            
           // alert(obj.code);
            // alert(obj.empname);
        if(obj2.status2==1){
           
           
            $('#e2name').val(obj2.empname2);


           
           if (confirm("Do you want to search another record!")) {
            document.getElementById('btn2').style.visibility = 'hidden';
                document.getElementById("e3code").focus();
               $('#btn3').on('click', function () {
                var ssid= document.getElementById("e3code").value;
               alert(ssid);
                 $.ajax({
        type:"POST",
        url: "dataajax3.php",
        data: { ssid: ssid },
        dataType: 'json',
        success: function(res3){

        alert(JSON.stringify(res3));

          var obj3 = JSON.parse(JSON.stringify(res3));
            alert(obj3.status3);
           // alert(obj.code);
            // alert(obj.empname);
        if(obj3.status3==1){
           
           
            $('#e3name').val(obj3.empname3);


           
           if (confirm("Do you want to search another record!")) {
            document.getElementById('btn3').style.visibility = 'hidden';
                document.getElementById("data").focus();
               

          } else {
            //input box
              document.getElementById("data").focus();
          }


        
        }
        else {
                alert("No Record found");
            }   
        }
        });
       
               });
               

          } else {
            //input box
              document.getElementById("data").focus();
          }


        
        }
        else {
                alert("No Record found");
            }   
        }
        });
       
               });

          } else {
            //input box
              document.getElementById("data").focus();
          }


        
        }
        else {
                alert("No Record found");
            }   
        }
        });
        });
    
    
});
</script>
  
</body>
</html>