
<?php
include('/phpFunction/checklogin.php');
include('views/private/header.php');
$groupName=$_GET['sgn'];
?>


<div class="container">

<div class="row">

  	<?php
    	include('groupSideColumn.php')
  	?>




  <div class="col-md-6">
  	<div class="container">
  	<ul data-role="listview" data-theme="a">
				<?php
          include('event_Details.php')
          ?>

	</ul>
	</div>
  	
  </div>
  
  
  
  <div class="col-md-3">
  	<div class="container">
  		<div class="well">
  	<table class="table">
  	<tr>
  	<td>
  	Will you Attend?<br>

  	<a href="event_attended.php" class="btn btn-danger btn-lg active" role="button">Yes</a>
  	<a href="event_trial.php" class="btn btn-default btn-lg active">No</a>
    </td>
    </tr>
     
     <tr>
     <td>
     	Who will attend?<br>
     	<?php
          include('event_parti.php')
          ?>
     	</td>
     </tr>



  </table>
  </div>
</div>
</div>
 </div>						
		
		
		
				
		
		</div>
	</body>
</html>