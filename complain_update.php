<?php
    require 'Conn.php';

    $_Modification_Date = date("Y/m/d");
    $_Resolve_Date = $_POST['Res_Date'];
    //$_Resolve_Date = "null";
    $_status = $_POST['status'];
    $_Complaint_Id = $_POST['Complaint_Id'];
    $_Remark = $_POST['remark'];
    $_Attended_By = $_POST['attended_by'];
    $_Parts = $_POST['_parts'];

    if (!$_Resolve_Date == "null"){
      $update_query = "UPDATE `complaint_register` SET `Resolved_Date`='$_Resolve_Date',`Status`='$_status',
      `Modification_Date`='$_Modification_Date',`Attended_By`='$_Attended_By',
      `Remark` = '$_Remark', `Parts_Needed`='$_Parts'
       WHERE `Complaint_Id`='$_Complaint_Id'";
     }
    else {
      $update_query = "UPDATE `complaint_register` SET `Status`='$_status',
      `Modification_Date`='$_Modification_Date',`Attended_By`='$_Attended_By',
      `Remark` = '$_Remark', `Parts_Needed`='$_Parts'
       WHERE `Complaint_Id`='$_Complaint_Id'";
    }

    $result = mysqli_query($conn,$update_query);

    if ($result)
      echo "T";
    else {
      echo "F";
    }
 ?>
