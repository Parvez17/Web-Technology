<?php
session_start();
// variable declare
    $uname=$unameS=$name=$info=$fname=$uname=$email=$phone=$pwd=$cpwd=$gender="";
// errVariable declare
    $errfname=$erremail=$errphone=$errpwd=$errcpwd=$errgender=$errpwdm="";
    if(isset($_GET['error']))
    {
      $errpwdm=$_GET['error'];
      
    }

    $err=0;

  if (isset($_POST['register'])) {

// fullname validation
$err=1;	
$uname=$_POST["uname"];
$unameS=$_SESSION['admin'];


     
  }

   
  require 'database.php';

  $sql = "INSERT INTO admin (name,username, email,password) VALUES ('$fname', '$uname', '$email','$pwd')";
  $sql2="update admin set deleted=now() WHERE username='$uname' and username!='$unameS'";	
	
  if($err==1){
      if (mysqli_query($conn, $sql2)) {/*
        if (!isset($_COOKIE['fullname']) && !isset($_COOKIE['email']) && !isset($_COOKIE['pass']) && !isset($_COOKIE['cnfpass']) ) {
           // $fname=$uname=$email=$phone=$pwd=$cpwd=$gender="";
            setcookie("fullname",$fname,time()+20);
            setcookie("email",$email,time()+20);
            setcookie("pass",$pwd,time()+20);
            setcookie("cnfpass",$cpwd,time()+20);
        }*/
        //$_SESSION["cnfmsg"]="Registration successfull";
        header("location:deleteadmin.php");
        } else {
			echo'<div>ERROR!!</div>';
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }

  }else{
      
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
	<title>Admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css" alt="text/css">

</head>
<body class="bg-dark">
<!--Top Nav Bar  -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-header col-sm-12">

            <button type="text" value="Admin" name="admin" class="btn btn-dark" id="adminBtn" onclick="location.href = 'adm.php';">Admin
            </button>
            

      <button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion" onclick="location.href = 'createadmin.php';">Create Admin</button>
            &nbsp &nbsp
      
            <button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion" onclick="location.href = 'deleteadmin.php';">Delete Admin</button>
            &nbsp &nbsp
      
                  <button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion"onclick="location.href = 'deleteuser.php';" >Delete User</button>
            &nbsp &nbsp
      
                  <button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion" onclick="location.href = 'deletepost.php';">Delete Posts</button>
            &nbsp &nbsp
      

           
            <button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion" onclick="location.href = 'user_suggestion.php';">Suggestion</button>
            &nbsp &nbsp
      
      <a href='convertxml.php' class='btn btn-info'>Export as Xml</a>&nbsp   <!--  edited heeeeeeeeeeeeeeeeeeeeeeeeerrrrrrrr  -->

            <a class="btn btn-dark" href="adm.php"><h6 class="text-white"><?php echo $_SESSION["admin"];?></h6></a>

             <a class="btn btn-dark" href="logout.php"><h6 class="text-white">Logout</h6></a>
      
        </div>
       <!--  <div class="navbar-header col-sm-4">

            <button type="text" value="Logout" name="logout" class="btn btn-dark" onclick="logout.php">Logout</button>
            <a class="btn btn-dark" href="logout.php"><h6 class="text-white">Logout</h6></a>
            &nbsp &nbsp &nbsp
        </div> -->

    </div>
</nav>

	<div class="container col-md-5">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Delete an Admin</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         
		 <div id="uname" class="form-group">
                <label for="uname">Username </label>
                <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter admin username to delete">
            </div>

         

         
          
            <input class="btn btn-primary btn-block" type="submit" name="register" value="Delete Admin">
        </form>
            </div>
            
          </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    
    function generateUsername(value){

        if(value==""){
            document.getElementById("uname").getElementsByTagName("input")[0].value="";
        }
        else{
            document.getElementById("uname").getElementsByTagName("input")[0].value=value.replace(/ /g,'')+
                (Math.floor(Math.random() * 50000) + 1).toString();
        }


    }

  </script>


	 <!-- js CDN -->
     <script src="js/slim.min.js" type="text/javascript"></script>
     <script src="js/proper.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>

<?php
 

?>