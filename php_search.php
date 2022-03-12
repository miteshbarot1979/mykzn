<?php

// php search data in mysql database using PDO
// set data in input text

$Emp_Code = "";
$Ename = "";
$Edesig = "";
$Edept = "";
$Estatus="";

if(isset($_POST['Find']))
{
        // connect to mysql
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=kaizen","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    // id to search
    echo $Emp_Code;
    $Emp_Code = $_POST['Emp_Code'];
    //echo $Emp_Code;


     // mysql search query
    $pdoQuery = "SELECT * FROM emp_master WHERE Emp_Code=:Emp_Code";
echo $pdoQuery;
    $pdoResult = $pdoConnect->prepare($pdoQuery);

    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":Emp_Code"=>$Emp_Code));

    if($pdoExec)
    {
            // if id exist
            // show data in inputs
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
              $Emp_code = $row['Emp_Code'];
              $Ename = $row['Emp_Name'];
              $Edesig = $row['Emp_Desig'];
              $Edept = $row['Emp_Dept'];
              $Estatus=$row['Emp_Status'];

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

        <form action="php_search.php" method="post">

            Employee To Search : <input type="text" name="Emp_Code" value="<?php echo $Emp_Code;?>"><br><br>
            Employee Name : <input type="text" name="name" value="<?php echo $Ename;?>"><br><br>
            Designation : <input type="text" name="desig" value="<?php echo $Edesig;?>"><br><br>
            Department  : <input type="text" name="status" value="<?php echo $Edept;?>"><br><br>
            Status : <input type="text" name="status" value="<?php echo $Estatus;?>"><br><br>
            <input type="submit" name="Find" value="Find Data">

        </form>

        <form action="search_Emp1.php" method="post">
            Employee To Search : <input type="text" name="Emp1_Code" value="<?php echo $Emp1_Code;?>"><br><br>
            Employee Name : <input type="text" name="name1" value="<?php echo $Ename1;?>"><br><br>
            Designation : <input type="text" name="desig1" value="<?php echo $Edesig1;?>"><br><br>
            Department  : <input type="text" name="Dept1" value="<?php echo $Edept1;?>"><br><br>
            Status : <input type="text" name="status1" value="<?php echo $Estatus1;?>"><br><br>
            <input type="submit" name="Find1" value="Find Data">
        </form>
    </body>

    </html>
