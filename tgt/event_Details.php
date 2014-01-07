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
"SELECT L_EventRegistration.*,L_Member.*, L_Event.*
FROM L_EventRegistration,L_Member,L_Event
WHERE
L_Event.EventID=1
AND
L_EventRegistration.L_Event_EventID=L_Event.EventID
AND
L_EventRegistration.L_Member_MemberID=L_Member.MemberID"
,$con);






$info = mysql_fetch_array( $participant );



	echo "<h1>Event:".$info[Name].'</h1>';
	echo '<img src=" '.$info[ImageName].' "alt="testing" width=512 height=200 >
  	<h3>Details:</h3>
  	<ul class="list-group">
  	<li class="list-group-item">Organizer:<br>'.$info[Organizer].'</li>
  	<li class="list-group-item">Description:<br>'.$info[FEAT].'</li>
  	<li class="list-group-item">Venue:<br>'.$info[Venue].'</li>
  	<li class="list-group-item">Date and Time:<br>'.$info[DateAndTime].'</li></ul>';













//mysql_close($con);
//


?>

