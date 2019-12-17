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
<body class="bg-dark">
<!--Top Nav Bar  -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-header col-sm-8">

            <button type="text" value="Admin" name="admin" class="btn btn-dark" id="adminBtn" onclick="location.href = 'adm.php';">Admin
            </button>
            &nbsp &nbsp &nbsp

			<button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion" onclick="location.href = 'createadmin.php';">Create Admin</button>
            &nbsp &nbsp &nbsp
			
						<button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion" onclick="location.href = 'deleteadmin.php';">Delete Admin</button>
            &nbsp &nbsp &nbsp
			
									<button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion"onclick="location.href = 'deleteuser.php';" >Delete User</button>
            &nbsp &nbsp &nbsp
			
									<button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion" onclick="location.href = 'deletepost.php';">Delete Posts</button>
            &nbsp &nbsp &nbsp
			

           
            <button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion" onclick="location.href = 'user_suggestion.php';">Suggestion</button>
            &nbsp &nbsp &nbsp
			
			<a href='convertxml.php' style='float:right;' class='btn btn-info'>Export as Xml</a>&nbsp &nbsp &nbsp
			
        </div>
        <div class="navbar-header col-sm-4">

            <!-- <button type="text" value="Logout" name="logout" class="btn btn-dark" onclick="logout.php">Logout</button> -->
            <a class="btn btn-dark" href="logout.php"><h6 class="text-white">Logout</h6></a>
            &nbsp &nbsp &nbsp
        </div>

    </div>
</nav>




	<div class="container">
	<div class="bikroy-slider ">
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
//        echo $_SESSION['post_id'];
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
		        <p style="color:white;"><strong>Description</strong></p>
			<p style="color:white;"><?php echo $row['post']; ?></p>
		</div><hr>
		<div class="container">
			<h4 style="color:white;"><img src="img/house.png" alt="like" width="30" height="30" > Address</h4>
            <p style="color:white;"><strong ><?php echo $row['post']; ?></strong></p>
		</div>
		<br>
		<a href="delete.php? post_id=<?php echo $row['post_id'];?>" onClick="return confirm('Are you sure you want to delete?')" style="color:red;"><strong>Delete</strong></a>
	
  
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