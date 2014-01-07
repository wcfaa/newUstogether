
<?php 
include('/phpFunction/checklogin.php');
include('views/private/header.php');
$groupName=$_GET['sgn'];
?>


<div class="container">


				<h1>
					Event:
				</h1>				
		
			<img src="http://placehold.it/1024x400" alt="eventPic">
			<ul data-role="listview" data-theme="a">
				<li>Group :<?php  echo "$groupName";?>
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
					<button>Attend !</button>
				</li>
			</ul>
		</div>
		</div>
	</body>
</html>