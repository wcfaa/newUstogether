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
  	   
<div class="col-md-9">
  	<div class="container">
  		<div class="page-header">
  		<h1>Send an email to <small>Group Organizers<small></h1>
  		<h4>Organizer Name</h4>
  		</div>
    <form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="subject" class="col-sm-2 control-label">Subject</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="subject" placeholder="subject">
    </div>
  </div>
  <div class="form-group">
    <label for="message" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" placeholder="message" ></textarea>
      </div>
    
  </div>
  </form>
  <a href="#" style="float:right" class="btn btn-danger btn-lg active" role="button">Send</a>
  		</div>
  		</div>
  		</div>
  	
  		
  		
  		
  		</div>
  		 </div>
  		</div>
  		
