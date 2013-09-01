		<script src="js/prefix.js"jquery-l.js></script>
		<script src="js/jquery-1.7.1.min.js"jquery-l.js></script>
		<script type="text/javascript">
			/*jQuery time*/
			$(document).ready(function() {
				$("#accordian h3").click(function() {
					//slide up all the link lists
					$("#accordian ul ul").slideUp();
					//slide down the link list below the h3 clicked - only if its closed
					if (!$(this).next().is(":visible")) {
						$(this).next().slideDown();
					}
				})
			})
		</script>
	</body>
</html>