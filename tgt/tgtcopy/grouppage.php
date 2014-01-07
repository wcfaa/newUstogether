<?php 
require("phpFunction/common.php"); 

if(empty($_SESSION['user'])) 
{ 
	        // If they are not, we redirect them to the login page. 
   header("Location: login.php"); 
   die("Redirecting to login.php"); 
}     


// Connects to  Database 
include('config/config.php');
 // Connects to  Database 
mysql_connect("$host", "$username", "$password") or die(mysql_error()) ; 
mysql_select_db("$dbname") or die(mysql_error()) ; 

 //Retrieves data from MySQL 
$data = mysql_query("SELECT * FROM together_group_records") or die(mysql_error()); 
/**/
?>

<!doctype html>
<html lang="en">
<head>

      <title>Select the group you love</title>
</head>
<body>
       
        <?php  
 //Puts it into an array 
        while($info = mysql_fetch_array( $data )) 
        { 
    echo "<li><a data-transition='fade' href='togethergroup.php?sgn=".$info[group_name]."'>";//sgn=selectGroupName
    echo "<img src='http://placehold.it/225x250'>";
    echo "<h2>".$info[group_name]."</h2>";
    echo "<p><strong>".$info[group_admin]."</strong></p>";
    echo "<p class='ui-li-aside'>
    <strong>GroupMember:".$info[group_member]." </strong></p>";
    echo "</a></li>";
}
?>


</ul>
</div>
<!-- listview loop-->
</body>
</html>
















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
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>
<!-- <link href='http://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/bootstrap-glyphicons.css" rel="stylesheet">
  <title>Welcome to The USTogether</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
<!--   <link href="assets/css/together.css" rel="stylesheet"></head>  -->
  <link rel="stylesheet" type="text/css" href="assets/css/nonresponsivene.css"/>
</head> 
  <body>
    <div class="navbar navbar-fixed-top ">
      <div class="container">
        <div class="form-inline">

          <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
          <button type="button"  class="navbar-toggle " data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>

          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="navbar-brand" href="#" >USTogether</a>

          <!-- Place everything within .navbar-collapse to hide it until above 768px -->


<div class="nav-collapse collapse navbar-responsive-collapse">
          <div style=" padding-right: 30px; ">
          <ul class="nav  navbar-nav pull-right">
            <li >
              <a href="grouppage.php" style="color:black;"class="glyphicon glyphicon-search"></a>
            </li>
          
            <li>
              <a  class="glyphicon glyphicon-fullscreen"  style="color:black;" href="createGroup.php"class="btn dropdown-toggle" ></a>
            </li>
            <li>
              <a href="#" role="button" class="dropdown-toggle glyphicon glyphicon-cog " data-toggle="dropdown"></b></a>
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
        
  <!--
      
        <div class="nav-collapse collapse navbar-responsive-collapse">
          <div style=" padding-right: 30px; ">
          <ul class="nav  navbar-nav pull-right">
            <li >
              <a href="grouppage.php" style="color:black;"class="glyphicon glyphicon-search">&nbsp;&nbsp;Find</a>
            </li>
          
            <li>
              <a  class="glyphicon glyphicon-fullscreen"  style="color:black;" href="createGroup.php"class="btn dropdown-toggle" >&nbsp;&nbsp;Create</a>
            </li>
            <li>
              <a href="#" role="button" class="dropdown-toggle glyphicon glyphicon-cog " data-toggle="dropdown">&nbsp;
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
-->




      </div>
    </div>
  </div>
</div>


<!--==============================content================================-->
  <!-- function list -->
  <div class="container">



 </div>


 <!----==============================footer=================================-->

<!-- script -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://unslider.com/unslider.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


</body>
</html>
