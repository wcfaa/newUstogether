<?  $host="localhost";
    $username="usttrcom_users";
    $password="dtttcct24mg";
    $dbname="usttrcom_main";
    
     // Connects to  Database 
		mysql_connect("$host", "$username", "$password") or die(mysql_error()) ; 
		mysql_select_db("$dbname") or die(mysql_error()) ; 

    ?>