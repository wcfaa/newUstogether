<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
	
<div data-role="page">
  <div data-role="header">
  <h1>Your Profile</h1>
  <div data-role="content">
    <form method="post" action="demoform.asp">
      <fieldset data-role="controlgroup">
      <legend>Choose your gender:</legend>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male" checked>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female">	
      </fieldset>

      <fieldset data-role="controlgroup">
        <legend>Choose five areas of interest as you'd like:</legend>
          <label for="hiking">Hiking</label>
          <input type="checkbox" name="favInt" id="hiking" value="hiking" checked>
          <label for="green">Ssss</label>
          <input type="checkbox" name="favInt" id="studygroup" value="studygroup">
          <label for="blue">Mmmm</label>
          <input type="checkbox" name="favInt" id="movie" value="movie">	
      </fieldset>
      <input type="submit" data-inline="true" value="Submit">
    </form>
  </div>
</div>
  </div>
  
  
  
  
  
</body>