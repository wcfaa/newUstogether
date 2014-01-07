<?php 
		require("../phpFunction/common.php"); 

		if(empty($_SESSION['user'])) 
	    { 
	        // If they are not, we redirect them to the login page. 
	        header("Location: ../login.php"); 
	        die("Redirecting to login.php"); 
	    }     

	$groupName=$_GET['groupname'];

 ?>

 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
 	<title>Select the group you love</title>
 </head>
 <body>
 	<ul data-role="listview" data-inset="true">
    <li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
    <li><a href="index.html">
        <h2>Stephen Weber</h2>
        <p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
        <p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
        <p class="ui-li-aside"><strong>6:24</strong>PM</p>
    </a></li>
    <li><a href="index.html">
        <h2>jQuery Team</h2>
        <p><strong>Boston Conference Planning</strong></p>
        <p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
        <p class="ui-li-aside"><strong>9:18</strong>AM</p>
    </a></li>
    <li data-role="list-divider">Thursday, October 7, 2010 <span class="ui-li-count">1</span></li>
    <li><a href="index.html">
        <h2>Avery Walker</h2>
        <p><strong>Re: Dinner Tonight</strong></p>
        <p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
        <p class="ui-li-aside"><strong>4:48</strong>PM</p>
    </a></li>
</ul>
 </body>
 </html>