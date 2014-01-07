<?php require('checklogin.php');?>

<?php require('views/private/header.php');?>
<!--<div class="row">
-->
<div class="container">
<div class="row">
<div class="col-md-2">
<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
</ul>
</div>
<div class="col-md-10">


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



	echo "<div class='col-lg-3 col-sm-3'>
   ";
	echo "
   <div class='thumbnail'>
   ";

	echo "
   <img class='img-responsive'  src=http://placehold.it/225x250 >
   ";

	echo "<br> ";

	echo "<a "."href='group.php?gn=".$info[group_name]."'>".$info[group_name]."</a>";
	echo "<br>";
	echo $info[group_admin];
	echo "<span></span>";
	echo "<br>";
	echo "Groupmem   ";
	echo $info[group_member];
	echo"</div>";

	echo "</div>";
}


?>
</div>
</div>
</div>
</div>
<!--==============================footer=================================-->

<?php include('views/private/footer.php');?>
