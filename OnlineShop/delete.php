<?php

//including the database connection file
    include("database.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['post_id'];

//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"update post set post_deleted=now() WHERE post_id='$id'");
	//close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:deletepost.php");

?>

