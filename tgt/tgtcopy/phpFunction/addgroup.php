 <?php 
 
 //This is the directory where images will be saved 
 $target = "images/groupphoto/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This gets all the other information from the form 
 $name=$_POST['name']; 
 $email=$_POST['email']; 
 $phone=$_POST['phone']; 
 $pic=($_FILES['photo']['name']); 
  $host="localhost";
    $username="bobokcom_user";
    $password="bobobohk69280953";
    $dbname="bobokcom_db";
 // Connects to your Database 
 mysql_connect("$host", "$username", "$password") or die(mysql_error()) ; 
 mysql_select_db("$dbname") or die(mysql_error()) ; 
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `together_group` VALUES ('$name', '$email', '$phone', '$pic')") ; 
 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 ?> 