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
    <!-- this code is to resolution in mobile device -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <!--  this code is to resolution in mobile device  -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/together.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    <title>Select the group you love</title>
</head>
<body>
    <div data-role="page">
        <div data-position="right" data-role="panel" id="left-panel" data-theme="a"data-display="push" >
        <ul data-role="listview" data-theme="a">
            <li data-role="list-divider">Menu</li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="create.php">Create</a></li>
            <li data-icon="back"><a href="#demo-intro" data-rel="back">Back </a></li>
        </ul>
    </div>
    <!-- header -->
        <div   data-theme="a"data-role="header" data-position="fixed">
            
            <a data-transition="fade" href="#" data-rel="back" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true">Arrow left</a>
            <h1>Together</h1>
            <a href="#left-panel" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="a" data-inline="true">Bars</a>
            <!-- <h1><?php  echo "$groupName";?></h1> -->
        </div>
        <!-- header -->

    <!-- listview loop-->
    <ul data-role="listview" data-theme="a">

        <!-- add column title -->
        <!-- <li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li> -->
        <!-- data -->
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
<!-- list sample
    <li><a href="index.html">
        <h2>Stephen Weber</h2>
        <p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
        <p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
        <p class="ui-li-aside"><strong>6:24</strong>PM</p>
    </a></li> -->

</ul>
</div>
<!-- listview loop-->
</body>
</html>