<?php
require 'database.php';
session_start();

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" alt="text/css">
	
</head>
<body>


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
            	        <button id="myButton" class="btn btn-round bg-warning btn-md type="text" name="ading post" ><h5>Post your ad</h5>
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
					



    	<!-- Card content -->
   
	<div class="bikroy-content">
			<div class="container">
				<div class="row">
								
		<?php
require 'database.php';
//session_start();
ob_start();
$limit = 9;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;
$sql = "SELECT * FROM `user` WHERE `user_deleted` IS NULL ORDER BY `id` DESC LIMIT $start_from, $limit";

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
	echo'<div class="card">';
	echo'<img src="img/'.$row2['pic'].'"alt="img" class="sc-item-img img-responsive" width="100%" height="70%">';
    //echo'<div class="text-center"><a href="#">'.$row['title'].'</a></div>';
	//echo'<p class="text-center">Created by '.$row['user_name'].'</p>'; 
	//echo '<a  href="readMore.php?id='.$row['post_id'].'">Read more</a>';
	?><div class="card-body">
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