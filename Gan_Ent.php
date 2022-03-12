<?php
 session_start();
        
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
        <title>Shree Ganesh</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Eform.css"/>
       
    </head>
    <!-- સંતાડવા માટે <body onload="hideEmpl()" >-->
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
        if(obj.status==1){
           
           
            $('#e1name').val(obj.empname);
             $('#e1dept').val(obj.empdept);
             $('#e1desig').val(obj.empdesignation);
             $('#Avt1').attr('src',obj.empimage);


           
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
            
             $('#e2dept').val(obj2.empdept2);
             $('#e2desig').val(obj2.empdesignation2);
             $('#Avt2').attr('src',obj2.empimage2);

           
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

            $('#e3dept').val(obj3.empdept3);
             $('#e3desig').val(obj3.empdesignation3);
             $('#Avt3').attr('src',obj3.empimage3);

           
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
    <body >
        <div class="container-fluid">
            <div class="panel panel-primary"> 
                <div id="main_cont>
                    <div class="panel-body">
                        <form action="" method="POST">
                        <?php if(isset($_POST['btnm'])) { 
                            echo "Mitesh";
                            } 
                        ?>                               
                                <div id="emp_det" class="form-group">
                                    <div id="f_emp" class="col-md-6">
                                        <div class="col-xs-6">
                                            <label for="Emp1">First Employee Code*</label> 
                                            <input class="form-control" id="e1code" name="e1code" required placeholder="000">
                                        </div>        
                                        <div class="col-xs-8">
                                            <input class="form-control" id="e1name" name="e1name" value= "<?php  echo $result['e1Name']; ?>">
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control" id="e1desig" name="e1desig" required placeholder="Officer">
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control" id="e1dept" name="e1dept" required placeholder="Milk Procurement">
                                        </div>   
                                        <div id="avatar1">
                                            <img src="" width="90px" height="90px"alt="Avatar1" id="Avt1">
                                        </div> 

                                         
                                                                                                               
                                        </div> 
                                        <div class="col-md-12 text-center">
                                            <button type="button" id="btn1" name="btnm" class="btn btn-primary">Submit</button>
                                        </div>  
                                    </div>
                                     <!--<This is for calling Employee Data"></script> -->
                                  
                                    
                                    <div id="s_emp"class="col-md-6">
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
                                            <img src="" width="90px" height="90px"alt="Avatar1" id="Avt2">
                                        </div> 
                                           
                                        </div> 
                                        
                                            <div class="col-md-12 text-center">
                                                <button type="button" id="btn2" class="btn btn-primary">Submit</button>
                                            </div>
                                        

                                    </div>
                                    <div id="t_emp" class="col-md-6">
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
                                            <img src="" width="90px" height="90px"alt="Avatar1" id="Avt3">
                                        </div> 
                                           
                                        </div> 
                                        
                                        <div class="col-md-12 text-center">
                                            <button type="button" id="btn3" class="btn btn-primary">Submit</button>
                                        </div>
                                        
                                    </div>

                                </div>
                                <!-- This Division is for Fizen Details form -->
                                <div id="Kzn_form_det"> 
                                    <div id="CheckSpace">
                                        <div id="KznNo" class="col-md-2">
                                        <div class="form-group"class="col-md-2">
                                            <label for="Kaizen Form No.">Kaizan Form No.</label>
                                            <input type="text" class="form-control" id="Kzn_FormNo" aria-describedby="emailHelp" placeholder="Form Number">
                                        </div>
                                        </div>
                                        <div id="KznDt" class="col-md-4">
                                            <div class="col-xs-6">
                                                <div class="form-group"class="col-md-6">
                                                    <label for="Kaizen Date">Kaizan Date.</label>
                                                    <input type="text" class="form-control" id="Kzn_Date" aria-describedby="Kaizen Date" placeholder="DD/MM/YYYY">
                                                </div> 
                                            </div>
                                        </div>
                                       
                                        <div id="KznAmt" class="col-md-4">
                                            <div class="col-xs-6">
                                                <div class="form-group"class="col-md-6">
                                                    <label for="Kaizen Amt">Kaizan Amount in Rs.</label>
                                                    <input type="text" class="form-control" id="Kzn_Amt" aria-describedby="Kaizen Amount" placeholder="000">
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div id="Kzn_opt">
                                    
                                <table class="table">
                                        <thead>
                                           
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">સલામતી</label>
                                                </div>
                                                </th>
                                                <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">બગાડમાં ઘટાડો</label>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">કામની સરળતા</label>
                                                </div>
                                            </td>
                                             </tr>
                                             <tr>
                                                <th scope="row">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault"> ગુણવત્તા </label>
                                                </div>
                                                </th>
                                                <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault"> ખર્ચમાં ઘટાડો</label>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">સુંદરતા</label>
                                                </div>
                                            </td>
                                             </tr>
                                             <tr>
                                                <th scope="row">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">ગ્રાહકનો સંતોષ</label>
                                                </div>
                                                </th>
                                                <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">મશીનોની જાળવણી</label>
                                                </div>
                                                </td>
                                                <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">વિશ્વાસ</label>
                                                </div>
                                            </td>
                                             </tr>
                                        </tbody>
                                        </table>
                                </div>
                                <div id="Mybutton">
                                <div class="container">
                                
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">Save</a>
                                    <a href="#" class="btn btn-primary">Modify</a>
                                    <a href="#" class="btn btn-primary">Delete</a>
                                    <a href="#" class="btn btn-primary">Exit</a>
                                </div>
                                </div>
                                
                                </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
            
    </div>
       
    </body>
</html>