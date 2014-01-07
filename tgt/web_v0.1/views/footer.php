

<!-- script -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://unslider.com/unslider.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>

$(function() {
	$('.banner').unslider({
	speed: 500,               //  The speed to animate each slide (in milliseconds)
	delay: 5000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: false             //  Support responsive design. May break non-responsive designs
});
});
</script>

</body>
</html>
