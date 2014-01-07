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
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.1/grids-min.css">


  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/together.css" rel="stylesheet">
  <link href="assets/css/bootstrap-glyphicons.css" rel="stylesheet">

<script src="assets/js/jquery.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

</head>

 <body>
  <!-- header -->
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
              <a href="findgroup.php"id="whitecolor" class="glyphicon glyphicon-search">&nbsp;&nbsp;Find</a>
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
<!-- header end -->
<div class="container">
<div class="row">
  <div class=" col-sm-4 col-lg-4 ">
      
        <div class="panel panel-danager ">
          <div class="panel-heading">Learning</div>
          <div class="panel-body">
              <a href="#">Course</a>
              <a href="#">qweqwe</a>
              <a href="#">iouerlkwj</a>
              <a href="#">qweqwe</a>
              <a href="#">qweqwe</a>
</div>
</div>
 <div class="panel panel-danager ">
   <div class="panel-heading">Playing</div>
          <div class="panel-body">
            <a href="#">qwe</a>
            <a href="#">qweqwe</a>
            <a href="#">qwewqe</a>
            <a href="#">qweqwe</a>
            <a href="#">qweqwe</a>
              
</div>
</div>
 <div class="panel panel-danager ">
   <div class="panel-heading">Grouping</div>
          <div class="panel-body">
            <a href="#">qwe</a>
            <a href="#">qweqwe</a>
            <a href="#">qwewqe</a>
            <a href="#">qweqwe</a>
            <a href="#">qweqwe</a>
              
</div>
</div>      
 <div class="panel panel-danager ">
   <div class="panel-heading">Grouping</div>
          <div class="panel-body">
            <a href="#">qwe</a>
            <a href="#">qweqwe</a>
            <a href="#">qwewqe</a>
            <a href="#">qweqwe</a>
            <a href="#">qweqwe</a>
              
</div>
</div>      
 <div class="panel panel-danager ">
   <div class="panel-heading">Grouping</div>
          <div class="panel-body">
            <a href="#">qwe</a>
            <a href="#">qweqwe</a>
            <a href="#">qwewqe</a>
            <a href="#">qweqwe</a>
            <a href="#">qweqwe</a>
              
</div>
</div>      

        </div>  
  
  <div class="col-sm-4 col-lg-2">
    <!--  <div class="col-sm-6col-md-6"> -->
    <div class="thumbnail">
      <img src="http://placehold.it/600x250" alt="...">
      <div class="caption">
        <h3>fuction</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary">Details</a> <a href="#" class="btn btn-default">Join!</a></p>
      </div>
    </div>
  </div>

  <!-- two -->
    <div class="col-sm-4 col-lg-2">
    <!--  <div class="col-sm-6col-md-6"> -->
    <div class="thumbnail">
      <img src="http://placehold.it/600x250" alt="...">
      <div class="caption">
        <h3>function 2 ( sort in alp)</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary">Details</a> <a href="#" class="btn btn-default">Join!</a></p>
      </div>
    </div>
  </div>
<!-- three -->

    <div class="col-sm-4 col-lg-2">
    <!--  <div class="col-sm-6col-md-6"> -->
    <div class="thumbnail">
      <img src="http://placehold.it/600x250" alt="...">
      <div class="caption">
        <h3>function 2 ( sort in alp)</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary">Details</a> <a href="#" class="btn btn-default">Join!</a></p>
      </div>
    </div>
  </div>
 <div class="col-sm-4 col-lg-2">
    <!--  <div class="col-sm-6col-md-6"> -->
    <div class="thumbnail">
      <img src="http://placehold.it/600x250" alt="...">
      <div class="caption">
        <h3>fuction</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary">Details</a> <a href="#" class="btn btn-default">Join!</a></p>
      </div>
    </div>
  </div>

  <!-- two -->
    <div class="col-sm-4 col-lg-2">
    <!--  <div class="col-sm-6col-md-6"> -->
    <div class="thumbnail">
      <img src="http://placehold.it/600x250" alt="...">
      <div class="caption">
        <h3>function 2 ( sort in alp)</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary">Details</a> <a href="#" class="btn btn-default">Join!</a></p>
      </div>
    </div>
  </div>
<!-- three -->
 <div class="col-sm-4 col-lg-2">
    <!--  <div class="col-sm-6col-md-6"> -->
    <div class="thumbnail">
      <img src="http://placehold.it/600x250" alt="...">
      <div class="caption">
        <h3>fuction</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary">Details</a> <a href="#" class="btn btn-default">Join!</a></p>
      </div>
    </div>
  </div>

  <!-- two -->
    <div class="col-sm-4 col-lg-2">
    <!--  <div class="col-sm-6col-md-6"> -->
    <div class="thumbnail">
      <img src="http://placehold.it/600x250" alt="...">
      <div class="caption">
        <h3>function 2 ( sort in alp)</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary">Details</a> <a href="#" class="btn btn-default">Join!</a></p>
      </div>
    </div>
  </div>
<!-- three -->








  <!--  -->
</div>

      </body>
      </html>