<html >
<head>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <a class="navbar-brand" href="#" >Together</a>

            <!-- Place everything within .navbar-collapse to hide it until above 768px -->
            <div class="nav-collapse collapse navbar-responsive-collapse">
                <!--
            <form  action="login.php" method="post" class="navbar-form  pull-right">

                      <input type="text" name="email" value="@ust.hk" class="form-control" placeholder="@mail.com"/>
                      <input type="password" name="password" value=""  class="form-control" placeholder="Password"/>

                      <input class="btn btn-default" type="submit" value="Log In"/>

                </form>
        -->
                <div style=" padding-right: 18px;">
                    <a href="login.php" class="btn btn-link navbar-form  pull-right" style="color:black;" >Login</a>
                    <a href="register.php"class="btn btn-link navbar-form  pull-right"style="color:green;" >Sign up</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.nav-collapse --> </div>
<!-- /.container -->
<!-- /.navbar -->

<!--<div class="navbar navbar-fixed-top">
<a class="navbar-brand" href="#">The Together</a>

<button type="button" class="btn btn-default navbar-btn">Sign in</button>
</div>

<!--==============================content================================-->


<div class="blackground_banner">
    <div class="banner">
        <ul>
            <li id="imgg" style="background-image: url(images/slider.img/1.jpg)"><h1>Welcome </h1>
            <li id="imgg" style="background-image: url(images/slider.img/2.jpg)"><h1>Find group and join!</h1></li>
            <li id="imgg" style="background-image: url(images/slider.img/3.jpg)"><h1>Enjoy the school life.</h1></li>
        </ul>
    </div>
</div>
<br>
<!-- function list -->
<!--
  <div class="container">
    <?php 
 // Connects to  Database 

   /*
 $host="localhost";
    $username="usttrcom_users";
    $password="dtttcct24mg";
    $dbname="usttrcom_main";
*/
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



     Echo     "<div class='col-lg-3 col-sm-3'>";
     Echo     "<div class='thumbnail'>";
     Echo     "<img class='img-responsive'  src=http://placehold.it/225x250 >";
     Echo     "<br> ";
     echo     "<a "."href='".$info[group_name]."'>".$info[group_name]."</a>";
     echo     "<br>";
     echo     $info[group_admin];
     echo     "<span></span>";
     echo     "<br>"; 
     echo     "Groupmem   ";
     echo     $info[group_member];
     Echo     "</div>";

     Echo     "</div>";
   }


   ?>


 </div>
-->


<!----==============================footer=================================-->
<div class="footer">
    <p style="text-align:center;">HKUSTxUSTogteher.com</p>


</div>



<!-- script -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://unslider.com/unslider.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>

    $(function() {
        $('.banner').unslider({
            speed: 500,               //  The speed to animate each slide (in milliseconds)
            delay: 8000,              //  The delay between slide animations (in milliseconds)
            complete: function() {},  //  A function that gets called after every slide animation
            keys: true,               //  Enable keyboard (left, right) arrow shortcuts
            dots: true,               //  Display dot navigation
            fluid: true             //  Support responsive design. May break non-responsive designs
        });
    });
</script>

</body>
</html>
