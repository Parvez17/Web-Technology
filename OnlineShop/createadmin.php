<?php
session_start();
// variable declare
    $name=$info=$fname=$uname=$email=$phone=$pwd=$cpwd=$gender="";
// errVariable declare
    $errfname=$erremail=$errphone=$errpwd=$errcpwd=$errgender=$errpwdm="";
    if(isset($_GET['error']))
    {
      $errpwdm=$_GET['error'];
      
    }

    $err=0;

  if (isset($_POST['register'])) {

// fullname validation
    if (empty($_POST["fname"])) {
      $errfname="*This field is required";
    }elseif(!preg_match("/^[a-zA-Z]*$/", $_POST["fname"])){
        $errfname="*only letters and (-,')";
    }else{
      $fname=validate($_POST["fname"]);
      $uname=validate($_POST["uname"]);
      $err=1;
    }
// Email validation
    if (empty($_POST["email"])) {
      $erremail="*Email is required";
      $err=0;

    }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
      $erremail="*Invalid email";
      $err=0;
    }else{
      $email=validate($_POST["email"]);
      $err=1;
    }

// password validation
    if (empty($_POST["pwd"]) && empty($_POST["cpwd"])) {
      $errpwd="*password is required";
      $err=0;
    }else{
      $pwd=validate($_POST["pwd"]);
      $cpwd=validate($_POST["cpwd"]);
      $err=1;
    }
	
	



     
  }

   
  require 'database.php';

  $sql = "INSERT INTO admin (name,username, email,password) VALUES ('$fname', '$uname', '$email','$pwd')";

  if($err==1){
   if ($pwd==$cpwd) {
      if (mysqli_query($conn, $sql)) {
        if (!isset($_COOKIE['fullname']) && !isset($_COOKIE['email']) && !isset($_COOKIE['pass']) && !isset($_COOKIE['cnfpass']) ) {
           // $fname=$uname=$email=$phone=$pwd=$cpwd=$gender="";
            setcookie("fullname",$fname,time()+20);
            setcookie("email",$email,time()+20);
            setcookie("pass",$pwd,time()+20);
            setcookie("cnfpass",$cpwd,time()+20);
        }
        $_SESSION["cnfmsg"]="Registration successfull";
        header("location:createadmin.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
   }else{
        echo "<script type='text/javascript'>
            alert('password not matchd with each other');
      </script>";
        header("location:register.php?error="+$errpwdm);
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
	<title>Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css" alt="text/css">

</head>
<body class="bg-dark"><!--Top Nav Bar  -->
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
        <!-- <div class="navbar-header col-sm-4">

            <button type="text" value="Logout" name="logout" class="btn btn-dark" onclick="logout.php">Logout</button>
            <a class="btn btn-dark" href="logout.php"><h6 class="text-white">Logout</h6></a>
            &nbsp &nbsp &nbsp
        </div> -->

    </div>
</nav>

	<div class="container col-md-5">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Create new admin</div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <div class="form-group">
                <?php
                if (isset($_COOKIE['fullname'])) {
                  echo '<label for="fname">Fullname </label>
                      <input type="text" class="form-control" id="fname" name="fname" value="'.$_COOKIE['fullname'].'" onchange="generateUsername(this.value)">';
                      echo "";
                }else{
                  echo '<label for="fname">Fullname </label>
                      <input type="text" class="form-control" id="fname" name="fname" onchange="generateUsername(this.value)">';
                }
                  
                ?>
                
                <?php if(!empty($errfname)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $errfname</span>";}?>
            </div>
            <div id="uname" class="form-group">
                <label for="uname">Username </label>
                <input type="text" class="form-control" id="uname" name="uname" value="" readonly>
            </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" placeholder="Enter email">
             <?php if(!empty($erremail)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $erremail</span>";}?>
          </div>

         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" name="pwd" placeholder="Password">
              </div>
			  
			                <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" name="cpwd" placeholder="Confirm password">
              </div>
			  </div>
			  <?php if(!empty($errpwd)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $errpwd</span>";}?>
             <?php if(!empty($errpwdm)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $errpwdm</span>";}?>
          
            </div>
			  
			  </div>
            <input class="btn btn-primary btn-block" type="submit" name="register" value="Create New Admin">
        </form>
            </div>
             <?php if(!empty($errpwd)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $errpwd</span>";}?>
             <?php if(!empty($errpwdm)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $errpwdm</span>";}?>
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