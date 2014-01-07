<?php 

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
$data = mysql_query(
"SELECT L_Event.*, L_Group.GroupName
FROM L_Event, L_Group
WHERE L_Event.L_Group_GroupID=L_Group.GroupID
ORDER BY DateAndTime
",$con);
$tag_names=mysql_query("SELECT * FROM FatherTag WHERE FatherName LIKE '%sports%' ",$con);


while($tag=mysql_fetch_array($tag_names)){
	$tag_fin=$tag;
}

    
	

if(!$data)
{
	die("cannot access".mysql_error());
}



while($info = mysql_fetch_array( $data ))
    
{
	
	echo "<li><p>Tags:".$tag_fin[FatherName]."</p>"; 
  	echo "<li><p>Group Name :".$info[GroupName]."</p></li>";
    echo "<li><p>Event Name :".$info[Name]."</p></li>";
	echo"<li><p>Description :<br>".$info[Description]."</p>";
	echo "<li><p>Date and Time:".$info[DateAndTime]."</p>";
    echo "<li><p>Venue:".$info[Venue]."</p>";
	echo "<li><p>Organizer:".$info[Organizer]."</p><br><br>";
	}
		
		
//mysql_close($con);
// 


?>

