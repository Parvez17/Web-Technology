<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 30-Jul-18
 * Time: 11:27 AM
 */
include('database.php');

///write new query here
$q=$_GET["q"];

$result=mysqli_query($conn,"SELECT post_id, title FROM post where title like  '%$q%' ");

$rows=mysqli_num_rows($result);
if ($rows> 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<p><a href='postyouraddadmin.php?id=$row[post_id]' class='leftborder'><b>".$row['title']."</b></a></p>";
    }

}
else
{
    echo "No news found according to this search term";
}