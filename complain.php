<?php
    require 'Conn.php';

    $_Uman_No = $_POST["Uman_No"];
    $_Name = $_POST["Name"];
    $_Prob_Desc = $_POST["Prob_Desc"];
    $_Location = $_POST["Location"];
    $_Building = $_POST["Building"];
    $_Room_no = $_POST["Room_No"];
    $_Vend =  $_POST["Vend"];
    $_Dept = mysqli_real_escape_string($conn,$_POST["Dept"]);
    $_Phone_Num = $_POST["Phone_Num"];
    $_Complain_Date = date("Y/m/d");
    //$_Modification_Date = "";
    //$_Resolve_Date = "";
    $_status = "Pending";

    /*$_Uman_No = "5555";
    $_Name = "Gourab";
    $_Prob_Desc = "Need a GPU";
    $_Location ="Asansol";
    $_Building = "A block";
    $_Room_no = "212";
    $_Vend =  "HCL";
    $_Dept = "System";
    $_Phone_Num = "867095";
    $_Complain_Date = date("Y/m/d");
    //$_Modification_Date = date("Y/m/d");
    //$_Resolve_Date = date("Y/m/d");
    $_status = "False";*/


    $insert_query = "INSERT INTO `complaint_register`(`Complainer_Id`,
      `Complainer_Name`, `Complainer_Deptt`, `Problem_Description`,
      `Location`, `Building`, `Room_No`, `Vendor`, `Compaint_Date`,
       `Status`,  `phone_no`)
        VALUES('$_Uman_No','$_Name', '$_Dept','$_Prob_Desc','$_Location','$_Building',
          '$_Room_no','$_Vend','$_Complain_Date','$_status','$_Phone_Num')";

    $result = mysqli_query($conn,$insert_query);

    if ($result)
      echo "T";
    else {
      echo "F";
    }
 ?>
