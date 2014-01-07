<?php

$con    =mysql_connect("usttogether.com","usttrcom","ust71523") or die('Could not connect :'.mysql_error());

$testdb =mysql_select_db("usttrcom_main",$con) or die ("Can't use usttrcom_main : " . mysql_error());

$data   = mysql_query(
"
SELECT  L_Group.*, L_GroupRegistration.L_Group_GroupID
FROM    L_Group,L_GroupRegistration
WHERE   L_Group.GroupID=$groupID
AND     L_GroupRegistration.L_Group_GroupID=L_Group.GroupID
",$con)or die("cannot access".mysql_error());

$TD     = mysql_query(
"
SELECT  L_Event.DateAndTime, L_Group.*
FROM    L_Event, L_Group
WHERE   L_Group.GroupID=$groupID
AND     L_Event.L_Group_GroupID=L_Group.GroupID
",$con) or die("cannot access".mysql_error());

$members= mysql_query(
"
SELECT  L_Member.*, L_Group.GroupID, L_GroupRegistration.L_Group_GroupID
FROM    L_Member, L_Group, L_GroupRegistration
WHERE   L_Group.GroupID=$groupID
AND     L_GroupRegistration.L_Group_GroupID=L_Group.GroupID
AND     L_GroupRegistration.L_Member_MemberID=L_Member.MemberID
LIMIT   5
",$con) or die("cannot access".mysql_error());

$info   = mysql_fetch_array( $data );

    echo
            '
            <ul class="list-group">
            <li class="list-group-item"><h2>'
            .$info[GroupName]
            .'</li>'
            .'<li class="list-group-item">'
            .'</h2><img src=" '
            .$info[G_ImageName]
            .' "alt="testing" width=200 height=150 >'
            .'<li class="list-group-item">'
            .'<button type="button" class="btn btn-Success btn-lg btn-block">>>Together<<</button>'
            .'</li>'
            //.<br>Founded in '
            //.$info[DateofEstablishment]
            .'</br>'
            .'</li>
            ';
    echo    '<li class="list-group-item"> <dt>What we are about:</dt>
            <span class="label label-default">UST</span>
            <span class="label label-primary">Sport</span>
            <span class="label label-success">HKAYP</span>
            <span class="label label-info">HAPPY</span>
            <span class="label label-warning">FRIEND</span>
            <span class="label label-danger">SPONER</span>
            </li>';
//  echo    '<li class="list-group-item"><dt>About Us:</dt>';
//  echo    $info[Description]
//            .'<br>';
//  echo
//          '<a href="contactUs.php" class="btn btn-link btn-default" role="button">
//          '<span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>';

    echo    '<li class="list-group-item"><dt>Group Status:</dt>';
    //echo    '<dt>Group Status:</dt>';
    echo    "Member:";

$counter=1;

while($newInfo = mysql_fetch_array( $data ))
{
    $counter++;
}
    echo    $counter
            ."<br>Founder:"
            .$info[Founder];

date_default_timezone_set("Asia/Hong_Kong");
$now_date=strtotime(date('Y-m-d, H:i:s'));
$ptCount =0;
$total   =0;

while($TD_cont =mysql_fetch_array($TD))
{
    $total++;
    $event_date=strtotime($TD_cont[DateAndTime]);
    if($event_date<=$now_date)
    {
        $ptCount++;
    }
}
$remain=$total-$ptCount;

    echo    "<br>Past events:".$ptCount;
    echo    "<br>Upcoming events:".$remain."<br>";
//  echo    "<li class='list-group-item'> <dt>Members:</dt>";
    echo    "<br><dt>Members:</dt>";

While($MB=mysql_fetch_array($members))
{
    echo    $MB[Name]."<br>";
}
//    echo
//            "<li class='list-group-item'>
//            <dt>Members in this group ae also interested in:</dt>
//            recommendations
//            </li></ul>
//            ";
?>


  		


  