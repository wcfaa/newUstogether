<!--Problems remained:how to incorporate jquery to style "event_data.php", intend to use "ul-list-divider" -->

<?php
include('views/private/header.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<script>


</script>		<meta charset="UTF-8">
		<div class="container">
		<title>
			Together Event
		</title><!--    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"> -->
		<!--  this code is to resolution in mobile device  -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="panel" id="left-panel" data-theme="a" data-display="push" data-position="right">
				<ul data-role="listview" data-theme="a">
					<li data-role="list-divider">Menu
					</li>
					<li>
						<a href="index.php">HOME</a>
					</li>
					<li>
						<a href="create.php">Create</a>
					</li>
					<li data-icon="back">
						<a href="#demo-intro" data-rel="back">Back</a>
					</li>
				</ul>
			</div><!-- header -->
			<div data-theme="a" data-role="header" data-position="fixed">
				<a data-transition="fade" href="#" data-rel="back" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="a" data-inline="true">Arrow left</a>
				<h1>
					Together
				</h1><!-- <a href="right-panel" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="c" data-inline="true">Bars</a>
		-->
				<a href="#left-panel" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false">Menu</a> <!-- <h1><?php  echo "$groupName";?></h1> -->
			</div><!-- header -->
			<img src="http://placehold.it/360x250" alt="eventPic">
			<ul data-role="listview" data-theme="a">
				<li>Group
				</li>
				<li>Admin:
				</li>
				<div data-theme="a" data-role="collapsible" >
					<h1>Details</h1>
          <?php
          include('event_data.php')
          ?>

				</div>

					<a href="event_attended.php" data-role="button" data-inline="true" data-rel="dialog">Attend </a>
				</li>
				</div>

				<?php
 //Puts it into an array







	/*Pariticipants are not written.
	 * DB problems:forget to connect Group and Event, therefore Event is missing one foreign key "GroupID" , cannot fix this bug by updating scripts
	 *
	 *
	 *
	 *
	 */

	/*
    echo "<img src='http://placehold.it/225x250'>";
    echo "<h2>".$info[group_name]."</h2>";
    echo "<p><strong>".$info[group_admin]."</strong></p>";
    echo "<p class='ui-li-aside'>
    <strong>GroupMember:".$info[group_member]." </strong></p>";
    echo "</a></li>";
	 *
	 */

?>

			</ul>
		</div>
	</body>
</html>