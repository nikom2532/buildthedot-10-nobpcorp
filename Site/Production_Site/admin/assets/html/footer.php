		<script src="js/prefix.js"jquery-l.js></script>
		<script src="js/jquery-1.7.1.min.js"jquery-l.js></script>
		<script type="text/javascript" src="js/jquery_notification_v.1.js"></script>
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
		<script src="js/script2.js"></script>
<?php
		if($_GET["u_suc"]==1){
			?><script src="<?php echo $rootpath; ?>js/script2-jquerynoti-u_suc.js"></script><?php
		}
		elseif($_GET["e_suc"]==1){
			?><script src="<?php echo $rootpath; ?>js/script2-jquerynoti-e_suc.js"></script><?php
		}
?>
	</body>
</html>