<?php

  session_start();
  error_reporting(0);

  require 'database.php';

  $unm=$email=$gendr=$phnnum="";

  if (isset($_SESSION['user'])) {
   $sql="select * from user where name='".$_SESSION['user']."'";

   $data=mysqli_query($conn,$sql);
   $total=mysqli_num_rows($data);
   if ($total==1 && $data>0) {
    while ($row = mysqli_fetch_assoc($data)){
    $unm=$row["username"];
    $email=$row["email"];
    $gendr=$row["gender"];
    $phnnum=$row["phone_number"];
  }
 }
    
  }else{
    header("location:index.php");
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
	<title>EditProfile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" alt="text/css">

</head>
<body>
	 <h4 class="text-center">Your Profile</h4>
		  <hr>
	<div class="container col-md-6">
   <div class="row">
	    <div class="">
		
		   </div>
		    </div>
		     <div class="row">
		       <div class="col-md-12">
		   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
             <div class="form-group row">
                <label for="username" class="col-4 col-form-label">Full name</label> 
                <div class="col-8">
                <input id="username" name="un" class="form-control here" type="text" value="<?php echo $unm;?>">
                </div>
             </div>

            <?php
                if ($gendr=='male') {
              ?>

                <!-- <div class="form-group row">
                 <label for="select" class="col-4 col-form-label">Gender</label> 
                 <div class="col-8">
                 <select id="select" name="select" class="custom-select">
                   <option value="male" selected>Male</option>
                   <option value="female">Female</option>
                 </select>
                 </div>
                 </div> -->
                 <div style="width: 100%;" id="gender" class="form-group">
                        <label for="gender"> Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </label>

                        <input type="radio" name="gen" value="female" id="female">Female&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                        <input type="radio" name="gen" value="male" id="male" checked>Male
                    </div>
              <?php
            }else{
              ?>

              <!-- <div class="form-group row">
                 <label for="select" class="col-4 col-form-label">Gender</label> 
                 <div class="col-8">
                 <select id="select" name="select" class="custom-select">
                   <option value="male">Male</option>
                   <option value="female" selected>Female</option>
                 </select>
                 </div>
                 </div> -->

                 <div style="width: 100%;" id="gender" class="form-group">
                        <label for="gender"> Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     </label>

                        <input type="radio" name="gen" value="female" id="female" checked>Female&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                        <input type="radio" name="gen" value="male" id="male">Male
                    </div>
               <?php } ?>



       <div class="form-group row">
        <label for="website" class="col-4 col-form-label">Mobile Number</label> 
        <div class="col-8">
        <input id="website" name="phn" class="form-control here" type="text" value="<?php echo $phnnum;?>">
         </div>
          </div>
      <div class="form-group row">
       <label for="email" class="col-4 col-form-label">Email</label> 
       <div class="col-8">
        <input id="email" name="eml" class="form-control here" value="<?php echo $email;?>" type="text">
         </div>
       </div>
       <!-- <div class="form-group row">
            <label for="newpass" class="col-4 col-form-label">Current Password</label> 
            <div class="col-8">
          <input id="newpass" name="pass" class="form-control here" type="password">
          <?php if(!empty($errUpdate)){echo "<span style='background:red;color: white;padding: 3px;border-radius:5px;'> $errUpdate</span>";}?>

           </div>
        </div>  -->
        <div class="form-group row">
         <div class="offset-4 col-3">
           <input class="btn btn-primary btn-block" type="submit" name="update" value="Update My Profile">
           </div>
           <div><a href="profile.php" class="btn btn-danger">Cancel</a></div>
         </div>
       </form>
		 </div>
     </div>
  </div>
<hr>





		<!-- js CDN -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<!-- fontawesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</body>
</html>
<?php

  $fullname=$gender=$mbnum=$editEmail="";

  if (isset($_POST['update'])) {
    if (empty($_POST['un']) || empty($_POST['gen'])|| empty($_POST['eml']) || empty($_POST['phn']) ) {

      echo '<script type="text/javascript">
        alert("all fields must be filled");
      </script>';
      
    }else{
      $fullname=$_POST['un'];
      $gender=$_POST['gen'];
      $mbnum=$_POST['phn'];
      $editEmail=$_POST['eml'];

      echo $fullname;
      echo $gender;

      $sql="UPDATE user SET username='".$fullname."',email='".$editEmail."',gender='".$gender."',phone_number='".$mbnum."' WHERE name='".$_SESSION['user']."'";

      if (mysqli_query($conn,$sql)) {
        echo "<script type='text/javascript'>
        window.location.href ='profile.php'
      </script>";
      
      }else{

      }


    }
  }


?>

