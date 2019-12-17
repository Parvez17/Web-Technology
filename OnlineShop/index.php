<?php
require 'database.php';
session_start();
//ob_start();
$limit = 5;
/*if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;
$sql = "SELECT * FROM `post` WHERE `post_deleted` IS NULL ORDER BY `post_id` DESC LIMIT $start_from, $limit";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo'<div class="col-md-8">'
    echo'<div class="image">'
	echo'<div class="row">'
	echo'<div class="col-md-4">'
	echo'<img src='.$row['link'].'alt="img" class="sc-item-img img-responsive" width="100%" height="50%">'
    echo'<div class="text-center"><a href="#">'.$row['title'].'</a></div>'
	echo'<p class="text-center">Created by '.$row['user_name'].'</p>'
	echo '<a  href="readMore.php?id='.$row['post_id'].'">Read more</a>'
	echo'</div>'
	
    echo '<div class="container" id="posts" style="">';
    echo '<div class="row">';
    while ($row = mysqli_fetch_assoc($result)) {
        $post_id = $row['post_id'];
        $sql2 = "SELECT * FROM `extras` WHERE `post_id` ='" . $post_id . "'";
        $result2 = mysqli_query($conn, $sql2);


        while ($row2 = mysqli_fetch_assoc($result2)) {
            echo '<div class="col-sm-4">';
            echo '<div class="card">';
            echo '<img class="card-img-top" src="' . $row2['link'] . '" alt="Card image cap">'; ?>
            <div class="card-body">
                <h4 class="card-title"> <?php echo $row['title']; ?></h4>
                <h4 class="card-title">Created by <?php echo $row['user_name']; ?></h4>
                <p class="card-text"><?php echo $row['post']; ?></p>
                <a  href="readMore.php?id=<?php echo $row['post_id']; ?>">Read more</a>
                <p class="card-text">
                    <small class="text-muted">Created on <?php echo $row['time_date']; ?></small>
                </p>
            </div>

            <?php
            echo '</div>';
            echo '</div>';

        }


    }

    echo '</div>';
    echo '</div>';
}*/



?>




<!--
</main>

<footer>

    <div class="container" id="page">
        <?php
   /*     $sql = "SELECT COUNT(post_id) FROM `post`";
        $rs_result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($rs_result);
        $total_records = $row[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink = "<ul class='pagination'>";
        for ($i=1; $i<=$total_pages; $i++) {
            $pagLink .= "<li class='page-item'><a class='page-link' href='index.php?page=".$i."'>".$i."</a></li>";
        };
        echo $pagLink . "</ul>";

    */    ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php //include('footer.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" alt="text/css">
	
	<script>
        function showResult(str) {
            if (str.length==0) {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("livesearch").innerHTML=this.responseText;
                    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET","livesearch.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
	
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


			    


                <!-- Login & Post -->

                <?php

                if (isset($_SESSION["user"])) {

                	echo '<ul class="navbar-nav ml-auto">
					<li class="nav-item">
       					<a class="nav-link" href="mypost.php"><h6 class="text-white">My Posts</h6></a>
    			    </li>&nbsp
					<li class="nav-item">
       					<a class="nav-link" href="profile.php"><h6 class="text-white">'.$_SESSION["user"].'</h6></a>
    			    </li>&nbsp
    			    <li class="nav-item">
            	        <button id="myButton" class="btn btn-round bg-warning btn-md type="text" name="ading post"  ><h5>Post your ad</h5>
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
	
	<div>
	<h1><center>Popular Posts</center></h1></br></br>
	</div>
					
	<!-- Slider -->
            <div class="bikroy-slider">
             	<div class="container">
			<div class="container mt-4">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="1" class="active"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			    <li data-target="#demo" data-slide-to="3"></li>
			    <li data-target="#demo" data-slide-to="4"></li>
			    <li data-target="#demo" data-slide-to="5"></li>
			  </ul>

			  <div class="carousel-inner">
			  
			  <?php
require 'database.php';
//session_start();
ob_start();
$limit = 5;
$lm=20;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;
$sql = "SELECT * FROM `post` WHERE `post_deleted` IS NULL ORDER BY `likes_count` DESC LIMIT $lm";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

	 echo'<div class="carousel-item active">';
    while ($row = mysqli_fetch_assoc($result)) {
		 $post_id = $row['post_id'];
        $sql2 = "SELECT * FROM `post_pic` WHERE `post_id` ='" . $post_id . "'";
        $result2 = mysqli_query($conn, $sql2);

	
        while ($row2 = mysqli_fetch_assoc($result2)) {
			
			echo'<img src="img/'.$row2['pic'].'" alt="First slide" width="1100" height="200">';
			 echo' <div class="carousel-caption">';
			echo'<h3 style="color:white">'.$row['title'].'</h3>';
			 echo'<p>'.$row['post'].'</p>';
			   echo' </div>';
			   echo' </div>';

			    echo'<div class="carousel-item">';
			
		}
		
	}
}
		
		?>
			  

			  <!--  <div class="carousel-item active">
			      <img src="img/apple1.jpg" alt="First slide" width="1100" height="500">
			      <div class="carousel-caption">
			        <h3>First Slide</h3>
			        <p>We had such a great time in LA!</p>
			      </div>   
			    </div>

			    <div class="carousel-item">
			      <img src="img/apple1.jpg" alt="Second Slide" width="1100" height="500">
			      <div class="carousel-caption">
			        <h3>Second Slide</h3>
			        <p>Thank you, Chicago!</p>
			      </div>   
			    </div>

			    <div class="carousel-item">
			      <img src="img/apple3.jpg" alt="Thired Slide" width="1100" height="500">
			      <div class="carousel-caption">
			        <h3>Thired Slide</h3>
			        <p>We love the Big Apple!</p>
			      </div>   
			    </div>

			  <div class="carousel-item">
			      <img src="img/apple5.jpg" alt="Fourth Slide" width="1100" height="500">
			      <div class="carousel-caption">
			        <h3>Fourth Slide</h3>
			        <p>We love the Big Apple!</p>
			      </div>   
			    </div>

			    <div class="carousel-item">
			      <img src="img/apple5.jpg" alt="fifth Slide" width="1100" height="500">
			      <div class="carousel-caption">
			        <h3>Fifth Slide</h3>
			        <p>We love the Big Apple!</p>
			      </div>   
			    </div>-->
			</div>

			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
			</div>
		  </div>
	    </div>
		</div>
    	<br> 
		

<center><form>
        <input type="text" name="search" placeholder="Search" onkeyup="showResult(this.value)">
    </form>
    <div id="livesearch" style="border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;"></div>
</center>
    	<!-- Card content -->
   
	<div class="bikroy-content">
			<div class="container">
				<div class="row">
				<!-- category List -->
						<!--<div class="col-md-4">
						   <div class="list-group">
						   	   <a href="#" class="list-group-item disabled text-black" style="background-color: #00FF80"><h5>Mobile Category</h5></a>
						   	   <a href="dropdown1.php" class="list-group-item">Samsung</a>
						   	   <a href="#" class="list-group-item">Huawei</a>
						   	   <a href="#" class="list-group-item">Asus</a>
						   	   <a href="#" class="list-group-item">Nokia</a>
						   	   <a href="#" class="list-group-item">Micromax</a>
						   	   <a href="#" class="list-group-item">Redmi</a>
						       <a href="#" class="list-group-item">iphone</a>
						   </div><br>

						    <div class="list-group">
						   	   <a href="#" class="list-group-item disabled text-black" style="background-color: #00FF80"><h5>Computers, Tablets, & Accessories</h5></a>
						   	   <a href="#" class="list-group-item">Dell</a>
						   	   <a href="#" class="list-group-item">Hp</a>
						   	   <a href="#" class="list-group-item">Asus</a>
						   	   <a href="#" class="list-group-item">Samsung</a>
						   	   <a href="#" class="list-group-item">Acer</a>
						   	   <a href="#" class="list-group-item">Lenovo</a>
						   </div><br>

						   <div class="list-group">
						   	   <a href="#" class="list-group-item disabled text-black" style="background-color: #00FF80"><h5>Electronics</h5></a>
						   	   <a href="#" class="list-group-item">Samsung</a>
						   	   <a href="#" class="list-group-item">Huawei</a>
						   	   <a href="#" class="list-group-item">Asus</a>
						   	   <a href="#" class="list-group-item">Nokia</a>
						   	   <a href="#" class="list-group-item">Micromax</a>
						   	   <a href="#" class="list-group-item">Redmi</a>
						       <a href="#" class="list-group-item">iphone</a>
						   </div><br>
						</div>
						-->
								
		<?php
require 'database.php';
//session_start();
ob_start();
$limit = 9;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;
$sql = "SELECT * FROM `post` WHERE `post_deleted` IS NULL ORDER BY `post_id` DESC LIMIT $start_from, $limit";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

	echo'<div class="col-md-12">';
    echo'<div class="image">';
	echo'<div class="row">';
    while ($row = mysqli_fetch_assoc($result)) {
        $post_id = $row['post_id'];
        $sql2 = "SELECT * FROM `post_pic` WHERE `post_id` ='" . $post_id . "'";
        $result2 = mysqli_query($conn, $sql2);


        while ($row2 = mysqli_fetch_assoc($result2)) {
//	echo'<div class="panel-group"><div class="panel panel-info">';
	echo'<div class="col-md-4">';
//	echo'<div class="card">';
	echo"<div class='panel-group '><div class='panel panel-info fixed-height'>";
	echo'<img src="img/'.$row2['pic'].'"alt="img" class="sc-item-img img-responsive" width="100%" height="70%">';
    //echo'<div class="text-center"><a href="#">'.$row['title'].'</a></div>';
	//echo'<p class="text-center">Created by '.$row['user_name'].'</p>';
	//echo '<a  href="readMore.php?id='.$row['post_id'].'">Read more</a>';
	?><div class="panel-body">
				<h3 class="card-title">Price <span style="color:blue"><?php echo $row['price']; ?></span></h3>
                <h4 class="card-title">Title <span style="color:blue"><?php echo $row['title']; ?></span></h4>
                <h5 class="card-title">Posted by <span style="color:red"><?php echo $row['username']; ?></span></h5>
                <p class="card-text" ><strong>Description</strong> <?php echo $row['post']; ?></p>
                <a  href="postyouradd.php?id=<?php echo $row['post_id']; ?>">Read more</a>
                <p class="card-text">
                    <small class="text-muted">Posted on <?php echo $row['created']; ?></small>
                </p>
            </div>
	<?php echo'</div>';
	echo'</div>';
	echo'</div>';
	
	//echo'</div>';
	//echo'</div>';
		}	}
    echo '</div>';
	echo '</div>';
    echo '</div>';

}
?>


						

						<!-- image set -->
		<!--				<div class="col-md-8">
							<div class="image">
							<div class="row">
								<div class="col-md-4">
								<img src="img/mobile1.jpg" alt="img" class="sc-item-img img-responsive" width="100%" height="70%">
									<div class="text-center"><a href="#">Apple Mobile</a></div>
									<p class="text-center">$ 300.00</p>
								</div>
								<div class="col-md-4">
								<img src="img/mobile1.jpg" alt="img" class="sc-item-img img-responsive" width="100%" height="70%">
									<div class="text-center"><a href="#">Apple Mobile</a></div>
									<p class="text-center">$ 300.00</p>
								</div>
								<div class="col-md-4">
								<img src="img/mobile1.jpg" alt="img" class="sc-item-img img-responsive" width="100%" height="70%">
									<div class="text-center"><a href="#">Apple Mobile</a></div>
									<p class="text-center">$ 300.00</p>
								</div>
								<div class="col-md-4">
								<img src="img/mobile1.jpg" alt="img" class="sc-item-img img-responsive" width="100%" height="70%">
									<div class="text-center"><a href="#">Apple Mobile</a></div>
									<p class="text-center">$ 300.00</p>
								</div>
								<div class="col-md-4">
								<img src="img/mobile1.jpg" alt="img" class="sc-item-img img-responsive" width="100%" height="70%">
									<div class="text-center"><a href="#">Apple Mobile</a></div>
									<p class="text-center">$ 300.00</p>
								</div>
								<div class="col-md-4">
								<img src="img/mobile1.jpg" alt="img" class="sc-item-img img-responsive" width="100%" height="70%">
									<div class="text-center"><a href="#">Apple Mobile</a></div>
									<p class="text-center">$ 300.00</p>
								</div>
								<div class="col-md-4">
								<img src="img/mobile1.jpg" alt="img" class="sc-item-img img-responsive" width="100%" height="70%">
									<div class="text-center"><a href="#">Apple Mobile</a></div>
									<p class="text-center">$ 300.00</p>
								</div>
								<div class="col-md-4">
								<img src="img/mobile1.jpg" alt="img" class="sc-item-img img-responsive" width="100%" height="70%">
									<div class="text-center"><a href="#">Apple Mobile</a></div>
									<p class="text-center">$ 300.00</p>
								</div>
								<div class="col-md-4">
								<img src="img/mobile1.jpg" alt="img" class="sc-item-img img-responsive" width="100%" height="70%">
									<div class="text-center"><a href="#">Apple Mobile</a></div>
									<p class="text-center">$ 300.00</p>
								</div>
						     </div>
						 </div>
					     </div>-->
				    </div>
				    	
				    </div>
			   </div>
               <!-- Pager  -->
                <div class="page">
				<nav aria-label="Page navigation example">
				  <ul class="pagination justify-content-center">
				    <?php
        $sql = "SELECT COUNT(post_id) FROM `post`";
        $rs_result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($rs_result);
        $total_records = $row[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink = "<ul class='pagination'>";
        for ($i=1; $i<=$total_pages; $i++) {
            $pagLink .= "<li class='page-item'><a class='page-link' href='index.php?page=".$i."'>".$i."</a></li>";
        };
        echo $pagLink . "</ul>";
		?>
        <!--
				    <li class="page-item active"><a class="page-link" href="#">Previous</a></li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item active"><a class="page-link" href="#">Next</a></li>
				  -->
				  </ul>
				</nav>
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
			            <a class="dark-grey-text" href="suggestion.php">Suggestion</a>
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

	<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "addpost.php";
    };
</script>

	
	</body>
</html>