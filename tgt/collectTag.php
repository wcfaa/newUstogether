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
$data = mysql_query("SELECT b.*

FROM FatherTagMap bt, L_Event b, FatherTag t
WHERE bt.FatherTagID = t.FatherTagID
AND (t.FatherName IN ('solo', 'team'))
AND b.EventID = bt.Event_EventID
GROUP BY b.EventID
HAVING COUNT( b.EventID)=2",$con);




$tag=mysql_fetch_array($data);
echo $tag[FatherName];
?>