		<script src="<?php echo $rootpath; ?>js/prefix.js"jquery-l.js></script>
		<script src="<?php echo $rootpath; ?>js/jquery-1.7.1.min.js"jquery-l.js></script>
		<script type="text/javascript" src="<?php echo $rootpath; ?>js/jquery_notification_v.1.js"></script>
		<script src="<?php echo $rootpath; ?>js/script2.js"></script>
<?php
		if($_GET["u_suc"]==1){
			?><script src="<?php echo $rootpath; ?>js/script2-jquerynoti-u_suc.js"></script><?php
		}
		elseif($_GET["e_suc"]==1){
			?><script src="<?php echo $rootpath; ?>js/script2-jquerynoti-e_suc.js"></script><?php
		}
		elseif($_GET["ec_suc"]==1){
			?><script src="<?php echo $rootpath; ?>js/script2-jquerynoti-ec_suc.js"></script><?php
		}
		elseif($_GET["e_error1"]==1){
			?><script src="<?php echo $rootpath; ?>js/script2-jquerynoti-e_error1.js"></script><?php
		}
		elseif($_GET["e_error1"]==2){
			?><script src="<?php echo $rootpath; ?>js/script2-jquerynoti-e_error2.js"></script><?php
		}
?>
	</body>
</html>