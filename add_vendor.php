<?php

  require 'Conn.php';


			//getting the values
			$vendor_name = $_POST["vendor_name"];
			$project_head =$_POST["project_head"];
			$contact_no = $_POST["contact_no"];
			$vendor_location= $_POST["vendor_location"];
			$deals_in=$_POST["deals_in"];

      /*$vendor_name="Gourab";
			$project_head="mr.x";
			$contact_no="7895456";
			$vendor_location="Asansol";
 			$deals_in="xyz";*/



      $insert_query = "INSERT INTO `vendor_mst`(
      `Vendor_Name`, `ProjectHead`, `ProjectHead_ContactNo`,
      `VendorLocation`, `DealsIn`)
      VALUES('$vendor_name', '$project_head',
      '$contact_no','$vendor_location','$deals_in')";

      $result = mysqli_query($conn,$insert_query);

      if ($result)
          echo "T";
      else {
          echo "F";
        }
