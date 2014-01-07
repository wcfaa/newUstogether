<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Together</title>
  <!-- PURE CSS -->

   
<!-- <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.1/grids-min.css">  -->


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








<!--==============================footer=================================-->

<footer>
<p>&copy; Company 2013</p>
</footer>

<script src="assets/js/jquery.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>