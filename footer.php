<!-- Begin Footer -->
	<footer>
		<p>Chicken Coop Chataues &copy; 2015</p>
	</footer>
<!-- End Footer -->
</div>

<!-- Begin Scripts -->	
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery.slides.min.js"></script>
	<script type="text/javascript">
		$(function() {
		  $('#slides').slidesjs({
				width: 960,
				height: 300,
			play: {
				effect: "fade",
				auto: true,
				interval: 5000,
				swap: true
			},
			navigation: {
				active: false,
			},
			pagination: {
				active: false,
			}
		  });
		});
	</script>
	<?php wp_footer(); ?>
<!-- End Scripts -->
</body>
</html>