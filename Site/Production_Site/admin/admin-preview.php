<?php
	$rootpath="./";
	include("assets/html/header.php");
	if($_SESSION["username"]!=""){
		
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
	<div id="wrap-content" class="grid_13">
		<div id="sub-nav">
			<div class="grid_3">
				<ul>
					<li class="btn btn-blue">
						<a href="<?php echo $rootpath; ?>admin-form-upload.php?sgid=<?php echo $_GET["sgid"]; ?>">Upload photo</a>
					</li>
				</ul>
			</div>
			<div class="grid_5 prefix_3 right" id="page-num">
				<ul class="right">
					<li class="active-page">
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">>></a>
					</li>
				</ul>
			</div>
		</div><!-- end sub-nav-->
		<div id="wrap-mainwrapper" class="grid_13">
			<div id="mainwrapper">
<?php 
				$SQL="
					SELECT *
					FROM  `buildthedot_nobp_item`
					WHERE `subgroup_id` = \"{$_GET["sgid"]}\"
				";
				$db->query($SQL);
				while($rs=$db->fetchAssoc()){
					//echo $rs["name"];
?>
					<a href="<?php echo $rootpath; ?>admin-form-edit.php?id=<?php echo $rs["id"]; ?>">
						<div class="grid_3">
							<div id="box" class="box">
								<img src="<?php echo $rootpath; ?>../images/product/<?php echo $rs["image_path"]; ?>" alt="Label Product">
								<br/>
							</div>
							<div class="wordwrap">
								<?php echo $rs["item_name"]; ?>
							</div>
						</div>
					</a>
<?php
				}
?>
			</div><!--end mainwrapper -->
		</div><!--end wrap-mainwrapper -->
	
	</div><!--end wrap-content -->
	</div><!--end container -->
	</div><!--end wrap-box -->
	<!--js -->
<?php
}
else{
	include ($rootpath."assets/html/login_page.php");
}
	include ($rootpath . "assets/html/footer.php");
?>
