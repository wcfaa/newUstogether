<?php 
	
	    require("../phpFunction/common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: ../login.php"); 
        die("Redirecting to login.php"); 
    } 
    
?> 