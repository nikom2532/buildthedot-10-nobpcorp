<?php
	$rootpath = "./";
	include ("assets/html/header.php");
?>
<?php
	include ($rootpath . "assets/html/header2.php");
?>
		<div class="grid_13" id="wrap-title">
			<ul>
				<li>
					<a href="#">Label</a>
				</li>
				<li>
					&gt;
				</li>
				<li>
					<a href="#" class="active">Barcode label</a>
				</li>
			</ul>
		</div><!--end wrap-title -->
		<div class="grid_13" id="wrap-content">
			<h4 class="head-form">Upload photo</h4>
			<form action="<?php echo $rootpath; ?>assets/html/upload_process4.php?sgid=<?php echo $GET["sgid"]; ?>" method="post" enctype="multipart/form-data">
				<div class="grid_2 title-form">
					Title
				</div>
				<div class="grid_8">
					<input name="item_name" type="text" size="50">
				</div>
				<br class="clear"/>
				<div class="grid_2 title-form">
					Photo
				</div>
				<div class="grid_8">
					<input name="imagefile" type="file" size="50">
				</div>
				<div class="grid_8 prefix_2">
					<input type="submit" value="Submit">
				</div>
			</form>
		</div><!--end wrap-title -->
	</div><!--end container -->
</div><!--end wrap-box -->
<!--js -->

<?php
	include ($rootpath . "assets/html/footer.php");
?>