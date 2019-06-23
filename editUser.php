<?php
require "conn.php";

$UserId=$_POST['UserID'];
$UserName=$_POST['UserName'];
$email=$_POST['emailId'];
$contactNo=$_POST['phNo'];
$vendor=$_POST['vendor'];

/*$UserId='3333';
$UserName='Gourab S';
$email='xyz@gmail.com';
$contactNo='8670959172';
$vendor='HCL';*/


$sql="update user_mst set User_Name='$UserName',Email_id='$email',
phone_no='$contactNo',Vendor='$vendor' where UmanNo='$UserId'";
$result = mysqli_query($conn,$sql);
if($result){
echo 'TRUE';
}
else{
 echo 'FALSE';

}
mysqli_close($conn);
?>
