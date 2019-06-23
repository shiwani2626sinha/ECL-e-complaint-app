<?php
      require 'conn.php';

     	$ID = $_POST['vendor_id'];
      //$ID = "hhhs";

        $Query = "DELETE FROM vendor_mst WHERE Vendor_Id = '$ID'";
             if(mysqli_query($conn,$Query))
            {
               echo 'TRUE';
            }
?>
