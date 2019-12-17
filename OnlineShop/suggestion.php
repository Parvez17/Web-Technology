
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Suggestion</title>
	
	
	
	
	<button type="button" class="close" aria-label="Close">
  <span aria-hidden="false">&times;</span>
</button>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css" alt="text/css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
</head>
 <script>
   function sendSuggestion()
   {
	   $.ajax({url:"suggestionSent.php",
	           data:{val:document.getElementById('suggestion').value},
			   success:function(result)
			   {
				   if(result==1)
					   alert("suggestion sent");
				   else
					   alert(result);
			   }
			  });
   }
 </script>


  <body class="bg-dark">

  
  <form class="form-inline" action="" method="post">
		<div class="container col-md-5">
	    <div class="card card-login mx-auto mt-5">
	      <div class="card-header">Suggestion</div>
		  
	      <div class="card-body">
		  

	

	       
            <div class="form-group" id="comment2">
                <label for="comment">Suggestion:</label>
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="sendbtn btn" onclick="return validateForm()" formaction="send_suggestion.php">Send</button>
            </div>
</br>
<div class="form-group">
                <button type="button" class="sendbtn btn" onclick="location.href='index.php';" >Back</button>
            </div>			
			
		
	          
	      </div>
	    </div>
	  </div>
	  </form>



	<!-- js CDN -->
	 <script src="js/slim.min.js" type="text/javascript"></script>
	 <script src="js/proper.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
