<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>
			Together Event
		</title><!--    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"> -->
		<!--  this code is to resolution in mobile device  -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/together.min.css" type="text/css">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" type="text/css">
		<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript">
</script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js" type="text/javascript">
</script>
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
				<li>Event name :
				</li>
				<li style="list-style: none; display: inline">
					<div data-theme="a" data-role="collapsible">
						<h2>
							Details
						</h2>
						<ul data-theme="a" data-role="listview">
							<li>Description:<br>
								Venue :<!-- can be use google map -->
								<br>
								Date :<br>
								Time :<br>
								Patitciter :<br>
								sponsership
							</li>
						</ul>
					</div><button>Attend !</button>
				</li>
			</ul>
		</div>
	</body>
</html>