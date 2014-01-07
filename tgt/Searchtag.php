<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
		<meta charset="UTF-8">
<input type="search" name="search" id="search-basic" value="" />

<?php $_GET["search"];//user send input to server?>


<?php 

function getInput($msg){
  fwrite(STDOUT, "$msg: ");
  $varin = trim(fgets(STDIN));
  return $varin;
}
//server get the input


$con=mysql_connect("usttogether.com","usttrcom","ust71523");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
$testdb=mysql_select_db("usttrcom_main",$con);

if (!$testdb)
  {
  die ("Can\'t use usttrcom_main : " . mysql_error());
  }
$data = mysql_query("SELECT * FROM L_Event",$con);
if(!$data)
{
	die("cannot access".mysql_error());
}





?>