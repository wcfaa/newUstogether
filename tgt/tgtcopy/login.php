<?php 

    // First we execute our common code to connection to the database and start the session 
      require("phpFunction/common.php"); 
     
    // This variable will be used to re-display the user's username to them in the 
    // login form if they fail to enter the correct password.  It is initialized here 
    // to an empty value, which will be shown if the user has not submitted the form. 
    $submitted_username = ''; 
     
    // This if statement checks to determine whether the login form has been submitted 
    // If it has, then the login code is run, otherwise the form is displayed 
    if(!empty($_POST)) 
    { 
        // This query retreives the user's information from the database using 
        // their username. 
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt, 
                email 
            FROM users 
            WHERE 
                email = :email 
        "; 
         
        // The parameter values 
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
         
        try 
        { 
            // Execute the query against the database 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            // Note: On a production website, you should not output $ex->getMessage(). 
            // It may provide an attacker with helpful information about your code.  
            die("Failed to run query: " //. $ex->getMessage()
            ); 
        } 
         
        // This variable tells us whether the user has successfully logged in or not. 
        // We initialize it to false, assuming they have not. 
        // If we determine that they have entered the right details, then we switch it to true. 
        $login_ok = false; 
         
        // Retrieve the user data from the database.  If $row is false, then the username 
        // they entered is not registered. 
        $row = $stmt->fetch(); 
        if($row) 
        { 
            // Using the password submitted by the user and the salt stored in the database, 
            // we now check to see whether the passwords match by hashing the submitted password 
            // and comparing it to the hashed version already stored in the database. 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++) 
            { 
                $check_password = hash('sha256', $check_password . $row['salt']); 
            } 
             
            if($check_password === $row['password']) 
            { 
                // If they do, then we flip this to true 
                $login_ok = true; 
            } 
        } 
         
        // If the user logged in successfully, then we send them to the private members-only page 
        // Otherwise, we display a login failed message and show the login form again 
        if($login_ok) 
        { 
            // Here I am preparing to store the $row array into the $_SESSION by 
            // removing the salt and password values from it.  Although $_SESSION is 
            // stored on the server-side, there is no reason to store sensitive values 
            // in it unless you have to.  Thus, it is best practice to remove these 
            // sensitive values first. 
            unset($row['salt']); 
            unset($row['password']); 
             
            // This stores the user's data into the session at the index 'user'. 
            // We will check this index on the private members-only page to determine whether 
            // or not the user is logged in.  We can also use it to retrieve 
            // the user's details. 
            $_SESSION['user'] = $row; 
             
            // Redirect the user to the private members-only page. 
            header("Location: private.php"); 
            die("Redirecting to: private.php"); 
        } 
        else 
        { 
          
            // Tell the user they failed 
          header("Location: login.php"); 
            die("Redirecting to: login.php");  
             
            // Show them their username again so all they have to do is enter a new 
            // password.  The use of htmlentities prevents XSS attacks.  You should 
            // always use htmlentities on user submitted values before displaying them 
            // to any users (including the user that submitted them).  For more information: 
            // http://en.wikipedia.org/wiki/XSS_attack 
            $submitted_username = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
     
?> 


<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to The Together</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/together.css" rel="stylesheet">
   
 <style>
 #re1
 {
	 @media(min-width: 1200px){margin: 0px 0px 0px 0px;}
 }
 
 </style>  

    
    
  </head>

  <body>
<div class="navbar navbar-fixed-top ">
  <div class="container">
  <div class="form-inline">

    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->


    <!-- Be sure to leave the brand out there if you want it shown -->
    <a class="navbar-brand" href="#">Together</a>

    <!-- Place everything within .navbar-collapse to hide it until above 768px -->
   
    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</div><!-- /.navbar -->
   




  <!--==============================content================================-->
<div class="container">
   	  	
<div class="jumbotron">
 

 <div class="row">

  <form action="login.php" method="post"> 

<legend><h1>Sign In</h1></legend>

</div>

		<div class="row">
		<div class="col-lg-6 col-sm-6 hidden-sm"><br><p>Welcome back to Together again.<br><br>Let's find out more <br>what you like in here.</p><br>
	<!--	<a style="margin: 35px 0px 0px 0px;" class="btn btn-success "id="re1" href="register.php">Register</a> !-->
	
		
</div>

<div class="col-lg-6 col-sm-6">

		<div class="input-group">
		<h3 class="hidden-sm">ITSC Email</h3>
		<input type="text" name="email" value="@ust.hk" class="form-control" placeholder="@mail.com"/>
</div>


<div class="input-group">

		<h3 class="hidden-sm">Password</h3>
		<input type="password" name="password" value=""  class="form-control" placeholder="Password"/>
</div>

<br>

<div class="input-group">   
		<button    class="btn  btn-primary "   style="margin: -32px 0px 0px 0px;" type="submit"  />Log In</button>
		<a  class="text-danger" href="#"><h6>Lost your password?</h6></a>
</div>

</form>	

</div>
</div>
</div>


   	

	   	
 	  
   		
			
	
       
        
     


  <!--==============================footer=================================-->
  <footer>
    <div class="inner">
      <div class="footer-bg"> Together.com &copy; x HKUST @2013  </div>
    </div>
  </footer>
</div>

   <script src="assets/js/jquery.js"></script>
    
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>




