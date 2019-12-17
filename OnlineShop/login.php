<?php
 session_start();
 error_reporting(0);

 $usrname=$pwd=$remember=$failed=$data="";
 $errfname=$errpwd="";
 $err=0;
 $ver=0;

 if (isset($_POST["login"])) {
 	// username validation
    if (empty($_POST["usrname"])) {
      $errfname="*This field is required";
    }else{
      $usrname=validate($_POST["usrname"]);
      $err=1;
    }

    // password validation
    if (empty($_POST["pwd"])) {
      $errpwd="*password is required";
      $err=0;
    }else{
      $pwd=validate($_POST["pwd"]);
      $err=1;
    }
 }

 // if ($usrname=="tonmoy" && $pwd=="321") {
 // 	 echo "<script type='text/javascript'>
 //        window.location.href ='adm.php'
 //      </script>";
 // }

 require "database.php";
 $sql="select * from user where name='$usrname' && password='$pwd' && user_deleted is NULL";

 $sql2="select * from admin where username='$usrname' && password='$pwd' && deleted is NULL";
 $data=mysqli_query($conn,$sql);
 $user=mysqli_fetch_array($data);

 $data2=mysqli_query($conn,$sql2);
 $user2=mysqli_fetch_array($data2);

 if ($user) {
 	echo "user enter";
 	echo $usrname;
 	echo $pwd;
 	if(!empty($_POST["remember"]))   
	   {  
	    setcookie ("member_login",$usrname,time()+(60*10));  
	    setcookie ("member_password",$pwd,time()+ (60*10));
	   }  
	   else  
	   {  
	    if(isset($_COOKIE["member_login"]))   
	    {  
	     setcookie ("member_login","",time()-1);  
	    }  
	    if(isset($_COOKIE["member_password"]))   
	    {  
	     setcookie ("member_password","",time()-1);  
	    }  
	   }  

	   $_SESSION["user"]=$usrname;
	   header("location:index.php");
 }else{
 	if ($user2) {
 		echo "user2 enter";
 		if(!empty($_POST["remember"]))   
		   {  
		    setcookie ("member_login",$usrname,time()+(60*10));  
		    setcookie ("member_password",$pwd,time()+ (60*10));
		   }  
		   else  
		   {  
		    if(isset($_COOKIE["member_login"]))   
		    {  
		     setcookie ("member_login","",time()-1);  
		    }  
		    if(isset($_COOKIE["member_password"]))   
		    {  
		     setcookie ("member_password","",time()-1);  
		    }  
		   }  

	   $_SESSION["admin"]=$usrname;
	   header("location:adm.php");
 	}else{
 		echo $err;
 		if ($err==1) {
 			echo "script entere";
	 		echo '<script type="text/javascript">
	 			alert("username or password invalid");
	 		</script>';
 		}else{

 		}
 		
 	}
 }
	if (isset($_POST['home'])) {
		echo '<script type="text/javascript">
	 			window.location.href="index.php"
	 		</script>';
	}

 	 


  function validate($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css" alt="text/css">
	
</head>
  <body class="bg-dark">
		<div class="container col-md-5">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				 <input class="btn btn-primary btn-block" type="submit" name="home" value="Home">
			</form>
	    <div class="card card-login mx-auto mt-5">
	      <div class="card-header">Login</div>
	      <div class="card-body">

	<!-- registration confirm msg!!!! -->
	      	<?php if(isset($_SESSION["cnfmsg"])){echo $_SESSION["cnfmsg"];}?>

	        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	        	<?php if(!empty($failed)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $failed</span>";}?>
	          <div class="form-group">
	            <label for="userID">Username</label>
	            <input class="form-control" id="userID" type="text" name="usrname" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" placeholder="Enter username">
	            <?php if(!empty($errfname)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $errfname</span>";}?>
	          </div>
	          <div class="form-group">
	            <label for="exampleInputPassword1">Password</label>
	            <input class="form-control" id="exampleInputPassword1" type="password" name="pwd" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" placeholder="Password">
	            <?php if(!empty($errpwd)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $errpwd</span>";}?>
	          </div>
	          <div class="form-group">
	            <div class="form-check">
	              <label class="form-check-label">
	                <input class="form-check-input" type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>> Remember Password</label>
	            </div>
	          </div>
	          <input class="btn btn-primary btn-block" type="submit" name="login" value="login">
	        </form>
	        <div class="text-center">
	          <a class="d-block small mt-3" href="register.php">Register an Account</a>
	        </div>
	      </div>
	    </div>
	  </div>



	<!-- js CDN -->
	<!--  <script src="js/slim.min.js" type="text/javascript"></script>
	 <script src="js/proper.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
</body>
</html>
<?php 
	 unset($_SESSION["cnfmsg"]); 

 ?>