<?php 

    // First we execute our common code to connection to the database and start the session 
    require("phpFunction/common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
?>

<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to The Together</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/together.css" rel="stylesheet">
   
   

    
    
  </head>

  <body>
<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">

    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      
    </button>

    <!-- Be sure to leave the brand out there if you want it shown -->
    <a class="navbar-brand" href="#">The Together</a>

    <!-- Place everything within .navbar-collapse to hide it until above 768px -->
    <div class="nav-collapse collapse navbar-responsive-collapse">
      	 		    <ul class="nav navbar-nav pull-right">
			<li class="active"><a href="find.php">Find</a></li>	
			<li class="active"><a href="create.php">Create</a></li>	
			</ul>
	</div>
    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</div><!-- /.navbar -->
    


  <!--==============================content================================-->
		  		

  <!--==============================footer=================================-->
  
  <div class="navbar navbar-fixed-bottom navbar-inverse">
  ...

    <footer>
          <p>&copy; Company 2013</p>
        </footer>
      </div>


    <script src="assets/js/jquery.js"></script>
    
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
  
 
