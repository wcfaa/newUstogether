<?php 
    require("config/common.php"); 

    if(!empty($_POST)) 
    { 

        if(empty($_POST['username'])) 
        { 

            die("Please enter a username."); 
        } 

        if(empty($_POST['password'])) 
        { 
            die("Please enter a password."); 
        } 

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { 
            die("Invalid E-Mail Address"); 
        } 

        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        "; 

        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 

        try 
        { 

            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 

            die("Failed to run query: ");   
        } 

        $row = $stmt->fetch(); 

        if($row) 
        { 
            die("This username is already in use"); 
        } 

        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        "; 

        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 

        try 
        { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            die("Failed to run query: ");   
        } 

        $row = $stmt->fetch(); 

        if($row) 
        { 
            die("This email address is already registered"); 
        } 

        $query = " 
            INSERT INTO users ( 
                username, 
                password, 
                salt, 
                email 
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email 
            ) 
        "; 

        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 

        $password = hash('sha256', $_POST['password'] . $salt); 

        for($round = 0; $round < 65536; $round++) 
        { 
            $password = hash('sha256', $password . $salt); 
        } 

        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'] 
        ); 

        try 
        { 

            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 

            die("Failed to run query: " );  
        } 

        header("Location: login.php"); 

        die("Redirecting to login.php"); 
    } 

?>
<!DOCTYPE html>

<?php include '/phpFunction/checklogin.php';?>
<?php include 'views/private/header_guest.php';?>
  <!--==============================content================================-->
<div class="container">




  <form action="register.php" method="post"> 

<br>


<div class="row">
<div class="col-lg-6 col-sm-5 hidden-sm"><br><div style="padding-left: 80px;">
    <h1>Sign up</h1><p>Welcome join Together.<br><br>You will find something <br>you like in here.</p></div></div>
<div class="col-lg-6 col-sm-7">

<div class="input-group">
<h3 class="hidden-sm">Your Real Name</h3>
<input type="text" name="username" value="" class="form-control" placeholder="Real name"/>
</div>

<div class="input-group">
<h3 class="hidden-sm">ITSC Mail</h3>
<input type="text" name="email" value="@ust.hk" class="form-control" placeholder="@ust.hk"/>
</div>
<div class="input-group">
<h3 class="hidden-sm">Password</h3>
<input type="password" name="password" value=""  class="form-control" placeholder="Password"/>
</div>

<br>

<div class="input-group">   
<input class="btn  btn-success"  type="submit" value="Sign Up" /> 
</div>

</form>	
</div>
</div>
</div>
</div>
</div>
  <!--==============================footer=================================-->
<?php include 'views/private/footer.php';?>
