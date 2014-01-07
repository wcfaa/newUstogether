<?php 

    // First we execute our common code to connection to the database and start the session 
    require("phpFunction/common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    } 
?>
<?php     
    // This if statement checks to determine whether the edit form has been submitted 
    // If it has, then the account updating code is run, otherwise the form is displayed 
    if(!empty($_POST)) 
    { 
        // Make sure the user entered a valid E-Mail address 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { 
            die("Invalid E-Mail Address"); 
        } 
         
        // If the user is changing their E-Mail address, we need to make sure that 
        // the new value does not conflict with a value that is already in the system. 
        // If the user is not changing their E-Mail address this check is not needed. 
        if($_POST['email'] != $_SESSION['user']['email']) 
        { 
            // Define our SQL query 
            $query = " 
                SELECT 
                    1 
                FROM users 
                WHERE 
                    email = :email 
            "; 
             
            // Define our query parameter values 
            $query_params = array( 
                ':email' => $_POST['email'] 
            ); 
             
            try 
            { 
                // Execute the query 
                $stmt = $db->prepare($query); 
                $result = $stmt->execute($query_params); 
            } 
            catch(PDOException $ex) 
            { 
                // Note: On a production website, you should not output $ex->getMessage(). 
                // It may provide an attacker with helpful information about your code.  
                die("Failed to run query: " . $ex->getMessage()); 
            } 
             
            // Retrieve results (if any) 
            $row = $stmt->fetch(); 
            if($row) 
            { 
                die("This E-Mail address is already in use"); 
            } 
        } 
         
        // If the user entered a new password, we need to hash it and generate a fresh salt 
        // for good measure. 
        if(!empty($_POST['password'])) 
        { 
            $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
            $password = hash('sha256', $_POST['password'] . $salt); 
            for($round = 0; $round < 65536; $round++) 
            { 
                $password = hash('sha256', $password . $salt); 
            } 
        } 
        else 
        { 
            // If the user did not enter a new password we will not update their old one. 
            $password = null; 
            $salt = null; 
        } 
         
        // Initial query parameter values 
        $query_params = array( 
            ':email' => $_POST['email'], 
            ':user_id' => $_SESSION['user']['id'], 
        ); 
         
        // If the user is changing their password, then we need parameter values 
        // for the new password hash and salt too. 
        if($password !== null) 
        { 
            $query_params[':password'] = $password; 
            $query_params[':salt'] = $salt; 
        } 
         
        // Note how this is only first half of the necessary update query.  We will dynamically 
        // construct the rest of it depending on whether or not the user is changing 
        // their password. 
        $query = " 
            UPDATE users 
            SET 
                email = :email 
        "; 
         
        // If the user is changing their password, then we extend the SQL query 
        // to include the password and salt columns and parameter tokens too. 
        if($password !== null) 
        { 
            $query .= " 
                , password = :password 
                , salt = :salt 
            "; 
        } 
         
        // Finally we finish the update query by specifying that we only wish 
        // to update the one record with for the current user. 
        $query .= " 
            WHERE 
                id = :user_id 
        "; 
         
        try 
        { 
            // Execute the query 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            // Note: On a production website, you should not output $ex->getMessage(). 
            // It may provide an attacker with helpful information about your code.  
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        // Now that the user's E-Mail address has changed, the data stored in the $_SESSION 
        // array is stale; we need to update it so that it is accurate. 
        $_SESSION['user']['email'] = $_POST['email']; 
         
        // This redirects the user back to the members-only page after they register 
        header("Location: private.php"); 
         
        // Calling die or exit after performing a redirect using the header function 
        // is critical.  The rest of your PHP script will continue to execute and 
        // will be sent to the user if you do not die or exit. 
        die("Redirecting to private.php"); 
    } 
     
?>

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
<div class="pure-u-1-2">
   <h1>Edit Account</h1> 
        <div>
        <div id="c1p">Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, secret content!<br /> 
        <a href="memberlist.php">Memberlist</a><br /> 
        <a href="edit_account.php">Edit Account</a><br /> 
        <a href="logout.php">Logout</a> 
        <?php echo "<a href='private.php?user={$username}'>HIHIHI</a>";?>  
</div>

 <div class="pure-u-1-2">
    <form action="edit_account.php" method="post"> 
    Username:<br /> 
    <b><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></b> 
    <br /><br /> 
   <!-- E-Mail Address:<br /> 
    <input type="text" name="email" value="<?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?>" /> 
    <br /><br />!-->
    Password:<br /> 
    <input type="password" name="password" value="" /><br /> 
    <i>(leave blank if you do not want to change your password)</i> 
    <br /><br /> 
    <input type="submit" value="Update Account" /> 
    </form> 

 </div>        







<!--==============================footer=================================-->

<footer>
<p>&copy; Company 2013</p>
</footer>

<script src="assets/js/jquery.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>