<?php
require 'conn.php';
$stmt =$conn->prepare("SELECT Vendor_Id,Vendor_Name,ProjectHead,ProjectHead_ContactNo,
  VendorLocation, DealsIn FROM vendor_mst;");
                   $stmt->execute();
                   $stmt->bind_result($Vendor_Id, $Vendor_Name,$ProjectHead,$ProjectHead_ContactNo,
                                      $VendorLocation, $deals_in);
                   $result = array();
                   while($stmt->fetch()){
                                          $temp = array();
                                          $temp['Vendor_Id'] = $Vendor_Id;
                                          $temp['Vendor_Name'] = $Vendor_Name;
                                          $temp['ProjectHead'] = $ProjectHead;
                                          $temp['ProjectHead_ContactNo'] =$ProjectHead_ContactNo;
                                          $temp['Location']=$VendorLocation;
                                          $temp['deals_in']=$deals_in;
                                          array_push($result, $temp);
                                         }
                    echo json_encode($result);
?>
