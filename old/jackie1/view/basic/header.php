<!doctype html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width,initial-scale=1">
<!-- memu -->
 	<link rel="stylesheet" href="../../assets/menu/responsive-nav.css"> 
	<script src="../../assets/menu/responsive-nav.js"></script>
	<link rel="stylesheet" href="../../assets/menu/styles.css">
<!--bootstacp-->
	
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	     <nav class="nav-collapse">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>

    <script>
      var navigation = responsiveNav(".nav-collapse", {
        animate: true,        // Boolean: Use CSS3 transitions, true or false
        transition: 200,      // Integer: Speed of the transition, in milliseconds
        label: "Menu",        // String: Label for the navigation toggle
        insert: "after",      // String: Insert the toggle before or after the navigation
        customToggle: "",     // Selector: Specify the ID of a custom toggle
        openPos: "relative",  // String: Position of the opened nav, relative or static
        jsClass: "js",        // String: 'JS enabled' class which is added to <html> el
        init: function(){},   // Function: Init callback
        open: function(){},   // Function: Open callback
        close: function(){}   // Function: Close callback
      });
    </script>
</body>
</html>