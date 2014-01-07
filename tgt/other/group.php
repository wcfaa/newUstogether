<?php include('/phpFunction/checklogin.php');?>

<?php include('views/private/header.php');?>
<!--==============================content================================-->

<!--<div class="row">
-->
<div class="container">
<?php 
 // Connects to  Database 
   $host="localhost";
    $username="bobokcom_user";
    $password="bobobohk69280953";
    $dbname="bobokcom_db";
 // Connects to  Database 
 mysql_connect("$host", "$username", "$password") or die(mysql_error()) ; 
 mysql_select_db("$dbname") or die(mysql_error()) ; 
 
 //Retrieves data from MySQL 
 $data = mysql_query("SELECT * FROM together_group_records") or die(mysql_error()); 
 //Puts it into an array 
 while($info = mysql_fetch_array( $data )) 
 { 
 
 //Outputs the image and other data

 
 
 Echo "<div class='col-lg-3 col-sm-4'>
";
 Echo "
<a href='#' class='thumbnail'>
  ";

 Echo "
  <img class='img-responsive' alt='Reponsive image' src=../wu_TestFile/images/uploads/groupphoto/".$info['file_name'] .">
  ";
 
 //Echo $info['group_name'] . "<br> "; 
Echo"</a>";
   Echo "</div>";
 }

 ?>
</div>

<!--==============================footer=================================-->

<footer>
<p>&copy; Company 2013</p>
</footer>

<script src="assets/js/jquery.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>