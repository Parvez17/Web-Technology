<?php

	session_start();
	error_reporting(0);

	require 'database.php';

	if (isset($_GET['comment'])) {
		$sql="update post set comment='".$_GET['comment']."' where post_id='".$_SESSION['post_id']."'";
		$data=mysqli_query($conn,$sql);
		if ($data) {
			
			
		    echo "<p>".$_GET['comment']."</p>";
		    
		
		}

	}


?>