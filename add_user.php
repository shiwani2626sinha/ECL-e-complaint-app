<?php
include "conn.php";

$username= $_POST['Password'];
$password = "ecl";
$name= $_POST['Name'];
$email= $_POST['Email'];
$phNo= $_POST['PhoneNo'];
$role= $_POST['Role'];
$vendor= $_POST['Vendor'];

$CheckSQL = "SELECT * FROM user_mst WHERE UmanNo='$username'";
$check = mysqli_fetch_array(mysqli_query($conn,$CheckSQL));
 if(isset($check)){
 echo 'user Already Exist';
 }
else{
$sql="INSERT INTO user_mst (UmanNo,User_Name,Email_id,phone_no,Role,Vendor,password) VALUES
('$username','$name','$email','$phNo','$role','$vendor','$password')";
   $result = mysqli_query($conn,$sql);
if($result){
echo 'TRUE';
}
else{
 echo 'FALSE';
}
}
mysqli_close($conn);
?>
