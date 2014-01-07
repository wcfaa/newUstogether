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

    <title>Together</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/together.css" rel="stylesheet">
     <link href="assets/css/bootstrap-glyphicons.css" rel="stylesheet">
   
  
    
    
  </head>

  <body>
  <div class="navbar navbar-fixed-top ">
    <div class="container">

      <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>

      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="navbar-brand" href="index.php">Together</a>

      <!-- Place everything within .navbar-collapse to hide it until above 768px -->
      <div class="nav-collapse collapse navbar-responsive-collapse">
        <ul class="nav  navbar-nav pull-right">
            <li >
                <a href="find.php"id="whitecolor" class="glyphicon glyphicon-search">&nbsp;&nbsp;Find</a>
            </li>
            <li>
                <a id="whitecolor" class="glyphicon glyphicon-fullscreen" href="createGroup.php"class="btn dropdown-toggle" id="whitecolor">&nbsp;&nbsp;Create</a>
            </li>
            <li>
                <a href="#" id="whitecolor" role="button" class="dropdown-toggle glyphicon glyphicon-cog " data-toggle="dropdown">&nbsp;
                  <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?><b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="memberlist.php">Memberlist</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="edit_account.php">Edit Account</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Logout</a> </li>
                </ul>
            </li>
        </ul>
      </div>
    </div>
</div>

  <!--==============================content================================-->
<div class="container">
<div class="well">

 <div class="panel-heading"><h1>Create</h1></div>
 
  <!--name-->
 
 
   

<div class="row">
  <div class="col-lg-6">
  <form action="phpFunction/creategroup.php" id="FileUploader" enctype="multipart/form-data" method="post" >
 
   <div style="margin:90px 90px 90px 90px;" >
    <h2>Group Photo
    <br><h5>Please upload a Photo for your group</h5>
    </h2><br>
    <br>
    <input class="btn " type="file" name="mFile" id="mFile" />
      

</div>
</div>

  <div class="col-lg-6">
	  <div>   <h4>What is you Together group name?</h4><div class="input-group">
  <span class="input-group-addon"><h5>It's call</h5></span>
  <input type="text" name="group_name" class="form-control input-large" placeholder="Together">
 </div>
 
   <!--discription-->
    <div>  <h4>Can you introduce your group to your user?</h4>
      <textarea name="group_description" class="form-control" rows="3" placeholder="we are AYP......" ></textarea></div>
    
   <!--type-->  
    <div>  
     <h4>What type of your group?</h4>
 
      <input type="text" class="form-control input-large" name="group_type" placeholder="Japanese,Midterm Exam,hiking">
 </div>  

  </div>
  <br>
   <button type="submit" class="btn btn-danger btn-large pull-right" >Create!</button>
  </form>
</div>

  <!--==============================footer=================================-->
 

</div></div>  
 
 

    <footer>
          <p>&copy; Company 2013</p>
        </footer>
      


   <script src="assets/js/jquery.js"></script>
    
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.form.js"></script>


  </body>
</html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  




  
  












  
















