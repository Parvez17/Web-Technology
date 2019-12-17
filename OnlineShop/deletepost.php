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
                <a  href="postyouraddAdmin.php?id=<?php echo $row['post_id']; ?>">Read more</a>
                <p class="card-text">
                    <small class="text-muted">Posted on <?php echo $row['created']; ?></small>
                </p>
				<a href="delete.php? post_id=<?php echo $row['post_id'];?>" onClick="return confirm('Are you sure you want to delete?')" style="color:red;"><strong>Delete</strong></a>
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