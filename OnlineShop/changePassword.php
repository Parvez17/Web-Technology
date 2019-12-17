<?php
  session_start();
  require "database.php";
  if(isset($_GET['oldPass']))
  {
    $sql="select password from user where name='".$_SESSION['user']."'";
   
    
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
     $row=mysqli_fetch_assoc($result);
     if($_GET['oldPass']==$row['password'])
     {
     	$sql="update user set password=".$_GET['newPass']." where name='".$_SESSION['user']."'";
     	 $result=mysqli_query($conn,$sql);
     	 if($result===TRUE)
     	 {
     	 	echo 1;
     	 }
     	 else{
     	 	echo "some error occured";
     	 }
     }
     
    }
    else{
    	echo " user name not valid";
    }
  }
  else
  {
  	echo "no data send";
  }
