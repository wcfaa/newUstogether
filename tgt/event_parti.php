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
  
$participant=mysql_query(
"SELECT L_EventRegistration.*,L_Member.*, L_Event.EventID
FROM L_EventRegistration,L_Member,L_Event
WHERE 
L_Event.EventID=1
AND
L_EventRegistration.L_Event_EventID=L_Event.EventID
AND
L_EventRegistration.L_Member_MemberID=L_Member.MemberID"
,$con);

if(!$participant)
{
	die("cannot access".mysql_error());
	
}


$counter=0;
echo '<dt>Participants:</dt>
<div class="media">';
while($partiName = mysql_fetch_array( $participant ))
{
	echo'<a class="pull-left" href="#">
    <img class="media-object" src=" '.$partiName[ProfileImageName].'"
     width=30 height=20>
     </a><div class="media-body">
     <h4 class="media-heading">'.$partiName[Name]."</h4></div>
     </div>";
	$counter++;
}  	
  	echo'</dl>';
    echo '<b>'.$counter." people will attend<br></b>";
 

  
  
    

  
    
?>
 