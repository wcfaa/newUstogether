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
  <!-- PURE CSS -->

  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.1/grids-min.css">


  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/together.css" rel="stylesheet">
  <link href="assets/css/bootstrap-glyphicons.css" rel="stylesheet">
<style>.verticalLine {
    border-left: thick solid #ff0000;
}</style>
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
              <a href="grouppage.php"id="whitecolor" class="glyphicon glyphicon-search">&nbsp;&nbsp;Find</a>
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

<!--<div class="row">
-->
<div class="container">
  <?php 
 // Connects to  Database 
include('config/config.php');
 // Connects to  Database 
  mysql_connect("$host", "$username", "$password") or die(mysql_error()) ; 
  mysql_select_db("$dbname") or die(mysql_error()) ; 
  
 //Retrieves data from MySQL 
  $data = mysql_query("SELECT * FROM together_group_records") or die(mysql_error()); 
 //Puts it into an array 
  while($info = mysql_fetch_array( $data )) 
  { 

 //Outputs the image and other data



   Echo "<div class='col-lg-3 col-sm-3'>
   ";
   Echo "
   <div class='thumbnail'>
   ";

   Echo "
   <img class='img-responsive'  src=http://placehold.it/225x250 >
   ";
   
   Echo "<br> ";

   echo "<a "."href='".$info[group_name]."'>".$info[group_name]."</a>";
   echo "<br>";
   echo $info[group_admin];
   echo "<span></span>";
   echo "<br>"; 
   echo "Groupmem   ";
   echo $info[group_member];
   Echo"</div>";

   Echo "</div>";
 }


 ?>
</div>

<!--==============================footer=================================-->

<footer>
  <!-- <p>&copy; Company 2013</p> -->
</footer>

<script src="assets/js/jquery.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>