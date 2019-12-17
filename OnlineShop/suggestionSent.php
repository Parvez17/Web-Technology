<?php
 include("database.php");
  session_start();
 $sql="insert into user_suggestion (username,suggestion) values(\"".$_SESSION['user']."\",\"".$_GET['val']."\")";
 $result=mysqli_query($conn,$sql);
 if($result===TRUE)
 {
	 echo 1;
	 }
	 else echo "suggestion not sent";
	 
 ?>