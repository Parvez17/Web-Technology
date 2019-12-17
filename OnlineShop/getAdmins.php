<?php
 include("database.php");
  
 $sql="select * from admin";
 $result=mysqli_query($conn,$sql);
 
 if(mysqli_num_rows($result)>0)
 {
	 while($row=mysqli_fetch_assoc($result))
	 {
		echo' <div class="card col-sm-3" style="">
		  <img class="card-img-top" src="img/dhan.jpg" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title" id="">'.$row['name'].'</h5>
			<p class="card-text" id="">'.$row['id'].'</p>
			<p class="card-text" id="">'.$row['email'].'</p>
			 
		  </div>
     
		</div>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
	 }
  }
   else echo "no data in database";
  
?>