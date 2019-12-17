<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Help & Support</title>
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
	<!--Nav End-->				
	<div class="container">
	  <div class="jumbotron col-md-12 mx-auto" >
	  
		  <form action="" method="post">
			<div class="form-group">
				<h2>Welcome to secondhand.com's Help & Support Page</h2>
				<p>Here you can find answer to our most frequently asked questions and learn how to use it, how to stay safe and get in touch with us. </p>
				<h3> Stay safe on secondhand.com</h3>
				<p>At secondhand.com we are 100% committed to making sure that your experience on our site is as safe as possible.</p>
				<p>Here you can find advice on how to stay safe while trading on secondhand.com.</p>
				<h3>General safety advice</h3>
				
				<li><b>Keep things local.</b> Meet the seller in person, check the item and make sure you are satisfied with it before you make a payment. Where available, use Buy Now and have items delivered to you directly.</li>
				<li><b>Exchange item and payment at the same time.</b> Buyers – don't make any payments before receiving an item. Sellers – don't send an item before receiving payment.</li>
				<li><b>Use common sense.</b> Avoid anything that appears too good to be true, such as unrealistically low prices and promises of quick money.</li>
				<li><b>Never give out financial information.</b> This includes bank account details, eBay/PayPal info, and any other information that could be misused.</li>
				<h3>Scams and frauds to watch out for</h3>
				<li><b>Fake payment services.</b> secondhand.com does not offer any form of payment scheme or protection. Please report any emails claiming to offer such services. Avoid using online payment services or escrow sites unless you are 100% sure that they are genuine.</li>
				<li><b>Fake information requests.</b> secondhand.com never sends emails requesting your personal details. If you receive an email asking you to provide your personal details to us, do not open any links. Please report the email and delete it.</li>
				<li><b>Fake fee requests.</b> Avoid anyone that ask for extra fees to buy or sell an item or service. secondhand.com never requests payments for its basic services, and doesn't allow items that are not located in Bangladesh, so import and brokerage fees should never be required.</li>
				<h3>secondhand.com's safety measures</h3>
				<li>Our safety measures include:</li>
				<li>Hiding your email address on ads you post to protect you from spam.</li>
				<li>Giving you the option to hide your phone number on ads you post to protect you from spam.</li>
				<li>Making constant improvements to our technology to detect and prevent suspicious or inappropriate activity behind the scenes.</li>
				<li>Tracking reports of suspicious or illegal activity to prevent offenders from using the site again.</li>
				<h3>Reporting a safety issue</h3>
				<p>If you feel that you have been the victim of a scam, please report your situation to us immediately. If you have been cheated, we also recommend that you contact your local police department.</p>
				<p>secondhand.com is committed to ensuring the privacy of its users and therefore does not share information about its users publicly. However, we are committed to the safety of our users and will cooperate with the police department should we receive any requests for information in connection with fraudulent or other criminal activity.</p>
				
		  </form>
			
	  </div>
	</div>
	


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
			          <h6 class="text-uppercase font-weight-bold">Support & Feedback</h6>
			          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			          <p>You can send feedback and get support via email.
					  You can also get help on facebook and twitter. Follow them to get tips and update.</p>

			        </div>
			        <!-- Grid column -->
			        

			        
			        <!-- Grid column -->
			        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

			          <!-- Links -->
			          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
			          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			          <p>
			            <a class="dark-grey-text" href="profile.php">Your Account</a>
			          </p>
			          <p>
			            <a class="dark-grey-text" href="#!">Suggestion</a>
			          </p>
					   <p>
			            <a class="dark-grey-text" href="help.php">Help & Support</a>
			          </p>
			          

			        </div>
			        <!-- Grid column -->
			        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

			          <!-- Links -->
			          <h6 class="text-uppercase font-weight-bold">Contact</h6>
			          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			          <p>
			            <i class="fa fa-home mr-3"></i> khilkhet, Dhaka 1229, Bangladesh</p>
			          <p>
			            <i class="fa fa-envelope mr-3"></i> info@secondhand.com</p>
			          <p>
			            <i class="fa fa-phone mr-3"></i> +880 2 4566102-5</p>
			          <p>
			            <i class="fa fa-phone mr-3"></i> +880 2 8431024-8</p>

			        </div> 
			      </div>
			     
			    </div>
			    <!-- Footer Links -->

			    <!-- Copyright -->
			    <div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
			      <a class="dark-grey-text" href="https://www.bikroy.com/"> www.bikroy.com</a>
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