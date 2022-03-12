<?php

// php search data in mysql database using PDO
// set data in input text

$Emp1_Code = "";
$Ename1 = "";
$Edesig1 = "";
$Edept1 = "";
$Estatus1="";

if(isset($_POST['Find1']))
{
        // connect to mysql
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=kaizen","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    // id to search
    echo $Emp1_Code;
    $Emp1_Code = $_POST['Emp_Code'];
    //echo $Emp_Code;


     // mysql search query
    $pdoQuery = "SELECT * FROM emp_master WHERE Emp1_Code=:Emp_Code";
echo $pdoQuery;
    $pdoResult = $pdoConnect->prepare($pdoQuery);

    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":Emp1_Code"=>$Emp_Code));

    if($pdoExec)
    {
            // if id exist
            // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
              $Emp1_code = $row['Emp_Code'];
              $Ename1 = $row['Emp_Name'];
              $Edesig1 = $row['Emp_Desig'];
              $Edept1 = $row['Emp_Dept'];
              $Estatus1=$row['Emp_Status'];

                //$id = $row['id'];
                //$fname = $row['fname'];
                //$lname = $row['lname'];
                //$age = $row['age'];
            }
        }
            // if the id not exist
            // show a message and clear inputs
        else{
            echo 'No Data With This ID';
        }
    }else{
        echo 'ERROR Data Not Inserted';
    }
}


?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP SEARCH DATA USING PDO </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        

    </body>

    </html>
