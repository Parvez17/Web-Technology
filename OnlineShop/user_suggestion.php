<?php

require 'database.php';
session_start();
ob_start();

if (!(isset($_SESSION['admin']))) {
    header("location:login.php");
} else {


    $limit = 25;
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    };
    $start_from = ($page - 1) * $limit;
    $sql = "SELECT * FROM `user_suggestion` Order by `date` DESC LIMIT $start_from, $limit";
    $rs_result = mysqli_query($conn, $sql);
}
?>

<html>
<head>
    <title>Suggestions</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</head>

<body class="container-fluid">
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
			

           
            <button type="text" value="Suggestion" name="suggestion" class="btn btn-dark" id="suggestion" onclick="location.href = 'suggestion.php';">Suggestion</button>
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
<div class="container">
	
<center><h1>User Suggestions</h1></center>
<hr>
<table class="table table-striped table-bordered table-condensed">
    <tr>
        <th>User Name</th>
        <th>Suggestion</th>
        <th>Date</th>
    </tr>
    <?php
    while ($res = mysqli_fetch_array($rs_result)) {

        $sql1 = "SELECT * FROM `user` WHERE `username`='" . $res['username'] . "'";
        $rs_result1 = mysqli_query($conn, $sql1);
        $res1 = mysqli_fetch_array($rs_result1);

        echo "<tr>";
        echo "<td>" . $res['username'] . "</td>";
       
        echo "<td>" . $res['suggestion'] . "</td>";
        echo "<td>" . $res['date'] . "</td>";
        echo "</tr>";
    }

    ?>

</table>
<?php
$sql = "SELECT COUNT(username) FROM `user_suggestion`";
$rs_result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / $limit);
$pagLink = "<ul class='pagination pagination-lg'>";
for ($i = 1; $i <= $total_pages; $i++) {
    $pagLink .= "<li class='page-item'><a href='user_suggestion.php?page=" . $i . "'>" . $i . "</a></li>";
};
echo $pagLink . "</ul>";
//close db connection here
?>
</body>
</html>

