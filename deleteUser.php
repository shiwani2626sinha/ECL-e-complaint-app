<?php

	require "conn.php";

        $UmanNo=$_POST['umanNo'];
        //$UmanNo=3333;


	$stmt ="Delete FROM user_mst where UmanNo='$UmanNo'";
  if(mysqli_query($conn,$stmt))
{
  echo 'True';
}
?>
