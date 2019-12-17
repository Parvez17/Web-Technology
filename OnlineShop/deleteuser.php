<?php
    session_start();

    if (isset($_SESSION['admin'])) {
    
    }else{
        header("location:login.php");
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Admin Home Page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<style type="text/css">

</style>

<script type="text/javascript">
    window.onload=function()
    {
        $('#admin').show();
        $('#req_user').hide();
        $('#suggest').hide();
        $('#post').hide();
    }

$(document).ready(function() {
    $('#repUser').click(function () {
        $('#admin').hide();
        $('#req_user').show();
        $('#suggest').hide();
        $('#post').hide();
    });
});


$(document).ready(function() {
    $('#adminBtn').click(function () {
        $('#admin').show();
        $('#req_user').hide();
        $('#suggest').hide();
        $('#post').hide();
    });
});

$(document).ready(function() {
    $('#repPost').click(function () {
        $('#admin').hide();
        $('#req_user').hide();
        $('#suggest').hide();
        $('#post').show();
    });
});

$(document).ready(function() {
    $('#suggesition').click(function () {
        $('#admin').hide();
        $('#req_user').hide();
        $('#suggest').show();
        $('#post').hide();
    });
});


</script>

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

            <a class="btn btn-dark" href="#"><h6 class="text-white"><?php echo $_SESSION["admin"];?></h6></a>

             <a class="btn btn-dark" href="logout.php"><h6 class="text-white">Logout</h6></a>
			
        </div>
        <!-- <div class="navbar-header col-sm-2">

            <button type="text" value="Logout" name="logout" class="btn btn-dark" onclick="logout.php">Logout</button>
           <!--  <a class="btn btn-dark" href="logout.php"><h6 class="text-white">Logout</h6></a>
            &nbsp &nbsp &nbsp -->
        </div> -->

    </div>
</nav>


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
$sql = "SELECT * FROM `user` WHERE `user_deleted` IS NULL ORDER BY `id` DESC LIMIT $start_from, $limit";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

	echo'<div class="col-md-12">';
    echo'<div class="image">';
	echo'<div class="row">';
    while ($row = mysqli_fetch_assoc($result)) {
        //$post_id = $row['post_id'];
        $sql2 = "SELECT COUNT(id) FROM `user`";
        $result2 = mysqli_query($conn, $sql2);


        while ($row2 = mysqli_fetch_assoc($result2)) {
//	echo'<div class="panel-group"><div class="panel panel-info">';
	echo'<div class="col-md-4">';
	echo'<div class="card">';
	//echo'<img src="img/'.$row2['pic'].'"alt="img" class="sc-item-img img-responsive" width="100%" height="70%">';
    //echo'<div class="text-center"><a href="#">'.$row['title'].'</a></div>';
	//echo'<p class="text-center">Created by '.$row['user_name'].'</p>';
	//echo '<a  href="readMore.php?id='.$row['post_id'].'">Read more</a>';
	?><div class="card-body">
				<h3 class="card-title">Name: <span style="color:blue"><?php echo $row['username']; ?></span></h3>
                <h4 class="card-title">Username: <span style="color:blue"><?php echo $row['name']; ?></span></h4>
                <h5 class="card-title">Email <span style="color:red"><?php echo $row['email']; ?></span></h5>
                <h6 class="card-title">Password <span style="color:red"><?php echo $row['password']; ?></span></h5>
                <h5 class="card-title">Gender <span style="color:red"><?php echo $row['gender']; ?></span></h5>
                <h5 class="card-title">Phone: <span style="color:red"><?php echo $row['phone_number']; ?></span></h5>
				<a href="delete2.php?username=<?php echo $row['name'];?>" onClick="return confirm('Are you sure you want to delete?')" style="color:red;"><strong>Delete</strong></a>

                
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
 

<!-- End-->
</body>
</html>
	