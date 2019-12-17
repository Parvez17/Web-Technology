<?php

//including the database connection file
    include("database.php");
    //connect_db();
//getting id of the data from url
    $username = $_GET['username'];

//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"update user set user_deleted=now() WHERE name='$username'");
	//close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:deleteuser.php");

?>

