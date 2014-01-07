/*

*/

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
  <link href="assets/css/bootstrap-glyphicons.css" rel="stylesheet"></head>

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
            <a id="whitecolor" class="glyphicon glyphicon-fullscreen" href="createGroup.php" id="whitecolor">&nbsp;&nbsp;Create</a>
          </li>

          <li>
            <a id="whitecolor"class="glyphicon glyphicon-cog" href="edit_account.php" >
              &nbsp;
              <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></a>
          </li>

        </ul>
      </div>
    </div>
    <!-- /.nav-collapse --> </div>
  <!-- /.container -->
</div>
<!-- /.navbar -->

<!--<div class="navbar navbar-fixed-top">
<a class="navbar-brand" href="#">The Together</a>

<button type="button" class="btn btn-default navbar-btn">Sign in</button>
</div>

<!--==============================content================================-->

<!--<div class="row">
-->
<div class="container">
<?php 
 // Connects to  Database 
   $host="localhost";
    $username="bobokcom_user";
    $password="bobobohk69280953";
    $dbname="bobokcom_db";
 // Connects to  Database 
 mysql_connect("$host", "$username", "$password") or die(mysql_error()) ; 
 mysql_select_db("$dbname") or die(mysql_error()) ; 
 
 //Retrieves data from MySQL 
 $data = mysql_query("SELECT * FROM together_group_records") or die(mysql_error()); 
 //Puts it into an array 
 while($info = mysql_fetch_array( $data )) 
 { 
 
 //Outputs the image and other data

 
 
 Echo "<div class='col-lg-3 col-sm-4'>
";
 Echo "
<a href='#' class='thumbnail'>
  ";

 Echo "
  <img class='img-responsive' alt='Reponsive image' src=../wu_TestFile/images/uploads/groupphoto/".$info['file_name'] .">
  ";
 
 //Echo $info['group_name'] . "<br> "; 
Echo"</a>";
   Echo "</div>";
 }

 ?>
</div>

<!--==============================footer=================================-->

<footer>
<p>&copy; Company 2013</p>
</footer>

<script src="assets/js/jquery.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>