<?php
require 'database.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ad post</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" alt="text/css">
	
</head>
<body>
<!-- Bikroy.com & Ads-->
	<nav class="navbar navbar-expand-md navbar-dark bg-info">
		<div class="container">
			<a href="index.php" class="navbar-brand">
			<i class="glyphicon glyphicon-grain"></i><h2>Bikroy.com</h2></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button> &nbsp &nbsp
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
       					<!-- <a class="nav-link" href="#"><h6 class="text-white">All ads</h6></a> -->
    			    </li>
				</ul>
				<!-- Search bar -->
				<form class="navbar-form navbar-center">
			      <div class="input-group">
			        <input type="text" class="form-control w-60"placeholder="Search" name="search">
			        <div class="input-group-btn">
			          <button class="btn btn-default bg-warning" type="submit">
			            <i class="fas fa-search" aria-hidden="true"></i>
			          </button>
			        </div>
			      </div>
			    </form>&nbsp

			    


                <!-- Login & Post -->

                <?php

                if (isset($_SESSION["user"])) {

                	echo '<ul class="navbar-nav ml-auto">
					<li class="nav-item">
       					<a class="nav-link" href="profile.php"><h6 class="text-white">'.$_SESSION["user"].'</h6></a>
    			    </li>&nbsp
    			    <li class="nav-item">
            	        <button class="btn btn-round bg-warning btn-md type="text" name="ading post"><h5>Post your ad</h5>
            	         </button>
    			    </li>&nbsp
    			    <li class="nav-item">
       					<a class="nav-link" href="logout.php"><h6 class="text-white">Logout</h6></a>
    			    </li>
					</ul>';
                	
                }else{

                	echo '<ul class="navbar-nav ml-auto">
    			    <li class="nav-item">
            	        <button class="btn btn-round bg-warning btn-md type="text" name="ading post"><h5>Post your ad</h5>
            	         </button>
    			    </li>&nbsp
    			    <li class="nav-item">
       					<a class="nav-link" href="login.php"><h6 class="text-white">Login</h6></a>
    			    </li>
					</ul>';
                	
                }
  

				

				?>


			</div>
		</div>
	</nav>
	

	<div class="container">
		<div class="col-md-8">
		<form action="" method="post" enctype="multipart/form-data">
			<br><br>
			<h3 class="">Sell an Item &nbsp<img src="img/cart.png" alt="like" width="30" height="30"></h3><hr><br>
			 <div class="form-group row">
             <label for="name" class="col-2 col-form-label"><strong>Post Title</strong></label> 
           <div class="col-6">
          <input id="title" name="title" placeholder="Title" class="form-control here" type="text">
        </div>
      </div>

      <div class="form-group row">
             <label for="name" class="col-2 col-form-label"><strong>Category</strong></label> 
           <div class="col-6">
           <div class="input-group mb-3">
			  <select name="abc" class="custom-select" id="inputGroupSelect01" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
			    <option selected>Any</option>
			    <option value="1">Mobile</option>
			    <option value="2">Car</option>
			    <option value="3">Laptop</option>
			  </select>
			</div>
          </div>
		</div>
		
		<div class="form-group row">
             <label for="name" class="col-2 col-form-label"><strong>Price</strong></label> 
           <div class="col-6">
          <input id="price" name="price" placeholder="Price" class="form-control here" type="text">
        </div>
      </div>
		   <div class="form-group row">
             <label for="name" class="col-2 col-form-label"><strong>Address</strong></label> 
           <div class="col-6">
          <input id="address" name="address" placeholder="Address" class="form-control here" type="text">
        </div>
      </div>  
      <div class="form-group row">
             <label for="name" class="col-2 col-form-label"><strong>Add Photo</strong></label> 
           <div class="col-6">
         <div class="input-group mb-3">
		  <div class="custom-file">
		  <input type="file" name="files[]" multiple >
		   <!-- <input type="file" class="custom-file-input" id="inputGroupFile01">
		    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>-->
		  </div>
        </div>
      </div>
	  </div>
	  <div class="form-group row">
             <label for="name" class="col-2 col-form-label"><strong>Description</strong></label> 
           <div class="col-6">
			<textarea id="desc" name="desc" placeholder="Description" style="width:340px; height:150px;"></textarea>
		  </div>
      </div> 
	  
	  <input type="hidden" name="selected_text" id="selected_text" value="" />
       <div class="form-group row">
         <div class="offset-4 col-8">
           <button name="submit" type="submit" class="btn btn-primary">Post ad</button>
             <!-- <a href="profile.php" class="btn btn-danger">Cancel</a> -->
           </div>
         </div>
		 </form>
	</div>
</div>

<?php

if(isset($_POST['submit'])){
		
    // Include the database configuration file
    include_once 'database.php';
	$username=$_SESSION["user"];
    //$postid=$_SESSION["userid"];
	$title=$_POST['title'];
	$price=$_POST['price'];
	$address=$_POST['address'];	
	$post=$_POST['desc'];
	$cat = mysqli_real_escape_string($conn,$_POST['selected_text']);
	
	$statement="insert into post(username,post_id,title,post,price,address,category) values ('$username','$total_records','$title','$post','$price','$address','$cat')";

	

	
    // File upload configuration
    $targetDir = "img/";
    $allowTypes = array('jpg','png','jpeg','gif');
	
	$sql = "SELECT COUNT(pic_id) FROM `post_pic`";
        $rs_result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($rs_result);
        $total_records = $row[0];
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .= "('".$total_records."','".$fileName."'),";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }


	if(mysqli_query($conn,$statement))
{        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $conn->query("INSERT INTO post_pic (pic_id,pic) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
				//echo "<script type='text/javascript'>alert('submitted successfully!')</script>";

            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
				       // echo "<script type='text/javascript'>alert('failed!')</script>";

            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    
	

//	echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
echo "<script type='text/javascript'>
        window.location.href ='index.php'
      </script>";
   // header('location:addpost.php');
}
else
{
	//echo "<script type='text/javascript'>alert('failed!')</script>";

mysqli_error($conn);}


    // Display status message
   // echo $statusMsg;
}
?>


		       <!-- Footer -->
			       <div style="background-color: pink;">
			<footer class="page-footer font-small blue-grey lighten-5">

			    <div style="background-color: #21d192;">
			      <div class="container">

			        <!-- Grid row-->
			        <div class="row py-4 d-flex align-items-center">
			          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
			            <h6 class="mb-0">Get connected with us on social networks!</h6>
			          </div>
			          <!-- Grid column -->
			          <div class="col-md-6 col-lg-7 text-center text-md-right">
			            <a class="fb-ic">
			              <i <a href="" class="fab fa-facebook-square"></a></i>
			            </a>&nbsp
			            <!-- Twitter -->
			            <a class="tw-ic">
			              <i class="fab fa-twitter"></i>
			            </a>&nbsp
			            <!-- Google +-->
			            <a class="gplus-ic">
			              <i class="fab fa-google-plus"></i>
			            </a>&nbsp
			            <!--Linkedin -->
			            <a class="li-ic">
			              <i class="fab fa-linkedin"> </i>
			            </a>&nbsp
			            <!--Instagram-->
			            <a class="ins-ic">
			             <i class="fab fa-instagram"></i>
			            </a>

			          </div>

			        </div>

			      </div>
			    </div>

			    <!-- Footer Links -->
			    <div class="container text-center text-md-left mt-5">

			      <!-- Grid row -->
			      <div class="row mt-3 dark-grey-text">

			        <!-- Grid column -->
			        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

			          <!-- Content -->
			          <h6 class="text-uppercase font-weight-bold">Company name</h6>
			          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
			            adipisicing elit.</p>

			        </div>
			        <!-- Grid column -->
			        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

			          <!-- Links -->
			          <h6 class="text-uppercase font-weight-bold">Products</h6>
			          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			          <p>
			            <a class="dark-grey-text" href="#!">MDBootstrap</a>
			          </p>
			          <p>
			            <a class="dark-grey-text" href="#!">MDWordPress</a>
			          </p>
			          <p>
			            <a class="dark-grey-text" href="#!">BrandFlow</a>
			          </p>
			          <p>
			            <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
			          </p>

			        </div>
			        <!-- Grid column -->
			        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

			          <!-- Links -->
			          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
			          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			          <p>
			            <a class="dark-grey-text" href="#!">Your Account</a>
			          </p>
			          <p>
			            <a class="dark-grey-text" href="#!">Suggestion</a>
			          </p>
			          <p>
			            <a class="dark-grey-text" href="#!">Shipping Rates</a>
			          </p>
			          <p>
			            <a class="dark-grey-text" href="#!">Help</a>
			          </p>

			        </div>
			        <!-- Grid column -->
			        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

			          <!-- Links -->
			          <h6 class="text-uppercase font-weight-bold">Contact</h6>
			          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			          <p>
			            <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
			          <p>
			            <i class="fa fa-envelope mr-3"></i> info@example.com</p>
			          <p>
			            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
			          <p>
			            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

			        </div> 
			      </div>
			     
			    </div>
			    <!-- Footer Links -->

			    <!-- Copyright -->
			    <div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
			      <a class="dark-grey-text" href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
			    </div>
			    <!-- Copyright -->

			  </footer>
			  <!-- Footer -->

            </div>



		<!-- js CDN -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<!-- fontawesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</body>
</html>