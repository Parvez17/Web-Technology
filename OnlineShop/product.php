<?php
require 'database.php';
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Product page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>


	<h2>Heading</h2>
	<br><br>
 <!-- Card -->
<!-- <div class="container col-md-12">
  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img/apple1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
 -->
<!-- Card deck -->
<div class="container">
<div class="card-deck">

  <!-- Card -->
  <div class="card mb-4 col-md-3">

  
    <div class="view overlay">
   
      <a href="#">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <div class="card-body">

    	 <div class="btn-group dropright">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
       <li>
       	<a href="#">Programming</a>
       	   <li><a href="#">HTML</a></li>
           <li><a href="#">CSS</a></li>
           <li><a href="#">JavaScript</a></li>
           <li><a href="#">Java</a></li>
           <li><a href="#">C</a></li>
           <li><a href="#">C++</a></li>

       </li>	
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>

     <!-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> -->

    </div>

  </div>
  <!-- Card -->

  <div class="card mb-4 col-md-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/apple1.jpg" alt="Card image cap" style="width:100%" >
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

  
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>

  <div class="card mb-4 col-md-3">
    <div class="view overlay">
      <img class="card-img-top" src="img/apple2.jpg" alt="Card image cap" style="width:100%">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4 col-md-3">
    <div class="view overlay">
      <img class="card-img-top" src="img/women.jpg" alt="Card image cap" style="width:100%">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>

</div>
</div>



<!-- Step 2  -->

<!-- Card deck -->

<!-- Card -->

<div class="container">
  <div class="card mb-4 col-md-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/apple2.jpg" alt="Card image cap" style="width:100%">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4 col-md-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/apple2.jpg" alt="Card image cap" style="width:100%">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4 col-md-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/apple2.jpg" alt="Card image cap" style="width:100%">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4 col-md-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/apple2.jpg" alt="Card image cap" style="width:100%">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4 col-md-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/apple2.jpg" alt="Card image cap" style="width:100%">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4 col-md-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/apple2.jpg" alt="Card image cap" style="width:100%">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4 col-md-3">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/apple2.jpg" alt="Card image cap" style="width:100%">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Card title</h4>
      <!--Text-->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md">Read more</button>

    </div>

  </div>
</div>
  <!-- Card -->










	<!--Using for Bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</body>
</html>
