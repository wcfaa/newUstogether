<?php 
		// require("phpFunction/common.php"); 

		// if(empty($_SESSION['user'])) 
	 //    { 
	 //        // If they are not, we redirect them to the login page. 
	 //        header("Location: login.php"); 
	 //        die("Redirecting to login.php"); 
	 //    }     

$groupName=$_GET['sgn'];

?>

<!doctype html>
<html lang="en">
<head>
	<!-- this code is to resolution in mobile device -->
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<!--  this code is to resolution in mobile device  -->
	<link rel="stylesheet" href="assets/css/together.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	<meta charset="UTF-8">
	<title>Together Group</title>
	<style type="text/css">
	.ui-li-thumb{

	}

	</style>
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
			
			<a data-transition="fade" href="#" data-rel="back" data-role="button" data-icon="arrow-l" data-iconpos="notext"  data-inline="true">Arrow left</a>
			<h1>Together</h1>
			<!-- <a href="right-panel" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="c" data-inline="true">Bars</a>
		-->
		<a href="#left-panel" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false">Menu</a>
		<!-- <h1><?php  echo "$groupName";?></h1> -->
	</div>
	<!-- header -->
	<!-- content -->

	<img src='http://placehold.it/360x250'>

	<!-- <ul data-role="listview">
		<li><strong>Member :123213</strong></li>
	
	</ul> -->
	
		<a href="#" data-role="button"data-theme="a">Join US !</a>
		
	
<div data-theme="a" data-role="collapsible">
				<h4>Details</h4>
				<p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
			
		</div>
	
	<ul data-role="listview"data-inset="ture"data-theme="a" >
		<li data-theme="a" data-role="list-divider">Group Events <span class="ui-li-count">2</span></li>
		<?php 
// Connects to  Database 
    $host="localhost";
    $username="usttrcom_users";
    $password="dtttcct24mg";
    $dbname="usttrcom_main";
 // Connects to  Database 
		mysql_connect("$host", "$username", "$password") or die(mysql_error()) ; 
		mysql_select_db("$dbname") or die(mysql_error()) ; 

 //Retrieves data from MySQL 
		$data = mysql_query("SELECT * FROM together_group_records") or die(mysql_error()); 
 //Puts it into an array 
		while($info = mysql_fetch_array( $data )) 
		{ 
    echo "<li><a href='event.php?sgn=".$info[group_name]."'>";//sgn=selectGroupName
    echo "<img src='http://placehold.it/225x250'>";
    echo "<h2>".$info[group_name]."</h2>";
    echo "<p><strong>".$info[group_admin]."</strong></p>";
    echo "<p >
    <strong>Date:00:00:00 </strong></p>";
    echo "</a></li>";
}
?>

</ul>
<!-- content -->
</div>

</body>
</html>