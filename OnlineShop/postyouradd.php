<?php
require 'database.php';
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" alt="text/css">
	
	<script>
function myFunction() {
  document.getElementById("btn").innerHTML = "1";
}
</script>
</head>
<body style="margin: auto;max-width: 800px;">


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
	<div class="bikroy-slider " style="width:800px; margin-left:-15px;">
		<br>
          <div class="container col-md-12 float-left" style="background-color: #B0C4DE">
             <div class="text-left">
			 
	<?php		
	require 'database.php';
	$limit = 9;
	$id=$_GET["id"];
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
	$start_from = ($page-1) * $limit;
	$sql = "SELECT * FROM `post` WHERE `post_id` ='" . $id . "'";

	$result = mysqli_query($conn, $sql);
	$numb="";
	if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $post_id = $row['post_id'];
        $_SESSION['post_id']=$post_id;
        echo $_SESSION['post_id'];
        $un = $row['username'];
		
		$sql3 = "SELECT * FROM `user` WHERE `name` ='" . $un . "'";
$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result3) > 0) {

    while ($row3 = mysqli_fetch_assoc($result3)) {

	$numb=$row3['phone_number'];
	}

	
}
        
		$sql2 = "SELECT * FROM `post_pic` WHERE `post_id` ='" . $post_id . "'";
        $result2 = mysqli_query($conn, $sql2);


        while ($row2 = mysqli_fetch_assoc($result2)) {
			
	//	}



	
?>
			 
<h4>Name: <?php echo $row['title']; ?></h4>
			 
			 
			 
			 </div>
			  <div class="container mt-4">
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="1" class="active"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			    <li data-target="#demo" data-slide-to="3"></li>
			  </ul>

			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/<?php echo $row2['pic']; ?>" alt="First slide" width="1100" height="500">
			      <div class="carousel-caption">
			        <h3><?php echo $row['title']; ?></h3>
			        <p><?php echo $row['post']; ?></p>
			      </div>   
			    </div> 

			    <div class="carousel-item">
			      <img src="img/apple3.jpg" alt="Thired Slide" width="1100" height="500">
			      <div class="carousel-caption">
			        <h3>Second Slide</h3>
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
           <!--  <div class="text-center">
			<button type="button" class="btn btn-success"><strong>Contact</strong></button>
		</div>
		 <div class="text-center" style="padding-top: 150px;">
			<button type="button" class="btn btn-success"><strong>Report this Ads</strong></button>
		</div> -->
            	    
    	    <div class="#">
			
    	     	<div class="ui-price-tag">
    	     		&nbsp &nbsp&nbsp &nbsp<button type="button" class="btn btn-warning"><h5> Tk <?php echo $row['price']; ?> </h5></button>&nbsp &nbsp
    	     	  <button type="button" name="like" class="btn btn-default" onclick="myFunction()" id="btn">
    	     	  	<!-- <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal"> -->
    	     	  <img src="img/like.png" alt="like" width="35" height="32"><?php echo $row['likes_count']; ?> </button> &nbsp
    	     	   <button type="button" name="telephone" class="btn btn-default"><?php echo $numb; ?>
    	     	 <!-- <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal"> -->
    	     	 	<img src="img/telephones.png" alt="telephone" width="40" height="30"></button>
    	     </div>
			</div>
		</div>
      
		<div class="col-md-10">
		</br>
		</br>
		        <p><strong>Description</strong></p>
			<p><?php echo $row['post']; ?></p>
		</div><hr>
		<div class="container">
			<h4><img src="img/house.png" alt="like" width="30" height="30"> Address</h4>
            <p><strong><?php echo $row['post']; ?></strong></p>
		</div>
		<br>
	
	     		<div class="#">
			<a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">
			<h4><img src="img/forbbiden.png" alt="forbbiden" width="30" height="30"> Report this ad</h4>
	     	</a>
	     	 <div class="container">
         <!-- Button to Open the Modal start -->
	  <!-- The Modal -->
	  <div class="modal" id="myModal">
	    <div class="modal-dialog">
	      <div class="modal-content">
	      
	        <!-- Modal Header -->
	        <div class="modal-header">
	          <h4 class="modal-title">Is there something wrong with this ad?</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        
	        <!-- Modal body -->
			  <div class="modal-body">
			         <form action="/action_page.php">
			    <div class="form-group">
			      <label for="email">Reason</label>
			       <div class="form-group row">
           <div class="col-12">
           <div class="input-group mb-3">
			  <select class="custom-select" name="reprt" id="option">
				    <option selected>--Select--</option>
				    <option  value="Item sold/unavailable">Item sold/unavailable</option>
				    <option  value="Fraud">Fraud</option>
				    <option  value="Duplicate">Duplicate</option>
				    <option  value="Spam">Spam</option>
				    <option  value="Wrong category">Wrong category</option>
				    <option  value="Offensive">Offensive</option>
				    <option  value="Other">Other</option>
				</select>
				</div>
	     	    </div>
				</div>
			    </div>
			  </form>

	        </div>
	        
	        <!-- Modal footer -->
	        <div class="modal-footer">
	          <!-- <button type="button" class="btn btn-danger" >Send report</button> -->
	          <input class="btn btn-danger btn-block" type="button" name="report" value="report post" onclick="report()">
	        </div>
	      </div>
	    </div>
	  </div>
	 </div>
	 <br><br>
	    <div class="">
	    	<p><STRONG>COMMENTS</STRONG></p><br><br>

	    	<p><div id="content"></div></p>
	    	<p>
	    		<?php

	    			$sql = "SELECT  comment FROM `post`";

	    			$result=mysqli_query($conn,$sql);

	    			if ($result) {
					    while ($row = mysqli_fetch_assoc($result)) {
					        echo $row['comment'];
					        ?>
					       	 <br>
					        <?php
					    }
				}

	    		?>
	    	</p>
	    	
	    </div>
       <div class="form-group">
		 <div class="form-group">
		 <label for="comment"><h5>Leave/Comment</h5></label>
		 <textarea class="form-control" rows="5" id="Comment" placeholder="Comment"></textarea>
		</div>
		<div class="modal-footer">
			<input type="button" name="" id="button" value="Comment" class="btn btn-danger"  onclick="comment()">
	          
	     </div>
		</div>
    </div>
		</div>
			
<?php
}}}
?>




		<!-- js CDN -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<!-- fontawesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
  
  function report()
  {
    var roption=$("#option").val();
    var email=$("#email").val();
	if (roption!="" && email!="") {
    $.ajax({
       url:"report.php",
       method:"GET",
       data:{report:roption,email:email},
       success:function(result)
       {
        if(result==1)
        {
          alert("report recieved by admin");
        }
        else{
          alert("fields are empty");
        }
       }
    });
	}

  }

/*  $('#button').click(function () {
	var Comment=$('#Comment').val();

	$.ajax({
		type:"POST",
		url:"comment.php",
		data:'comment='+Comment,
		success:function(data){
			$('#content').html(data);
		}

	});
});*/

  function comment()
  {
  	$.ajax({url:"comment.php",
           data:{comment:$("#Comment").val()},
           success:function(data){
           	$('#content').html(data);
           }
  	  });
  }

</script>

</html>