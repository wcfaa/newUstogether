<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Together</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->

  <link rel="stylesheet" type="text/css" href="assets/css/nonresponsivene.css"/>
  <link href="assets/css/bootstrap-glyphicons.css" rel="stylesheet">

<style>body{	
	padding-top:60px;
}
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
        <a class="navbar-brand" href="indexcopy.php">Together</a>

        <!-- Place everything within .navbar-collapse to hide it until above 768px -->
        <div class="nav-collapse collapse navbar-responsive-collapse">
          <ul class="nav  navbar-nav pull-right">
            <li >
              <a href="grouppage.php"style="color:black;"class="glyphicon glyphicon-search">&nbsp;&nbsp;</a>
            </li>
          
            <li>
              <a  class="glyphicon glyphicon-fullscreen"style="color:black;" href="createGroup.php">&nbsp;&nbsp;qweqweqwe</a>
            </li>
            <li>
              <a href="#"  style="color:black;"role="button" class="glyphicon glyphicon-cog " data-toggle="dropdown">&nbsp;
                <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></a>
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


