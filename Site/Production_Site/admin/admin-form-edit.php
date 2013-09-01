<?php
	$rootpath="./";
	include("assets/html/header.php");
	include($rootpath."assets/html/header2.php"); 
	
		$item_id=$_GET["id"];
		$SQL="SELECT * 
			FROM  `buildthedot_nobp_item`
			WHERE `id`='{$item_id}';";
		$db->query($SQL);
		if($rs=$db->fetchAssoc()){
?>
			<div class="grid_13" id="wrap-title">
				<ul>
					<li><a href="#">Label</a></li>
					<li>&gt;</li>
					<li><a href="#" class="active">Barcode label</a></li>
				</ul>
			</div><!--end wrap-title -->
			<div class="grid_13" id="wrap-content">
				<h4 class="head-form">Edit photo</h4>
				<div id="wrap-imageinfo" class="grid_5">
					<div id="mainwrapper">
						<div id="box" class="box">
							<img src="<?php echo $rootpath; ?>../images/product/<?php echo $rs["image_path"];?>" alt="Label Product"><br/>
						</div>
					</div><!--end mainwrapper -->
					<div id="text-info">
						<ul class="wordwrap">
							<li class="title-name">Filename:  <span class="text-filename"><?php echo $rs["image_path"]; ?></span></li>
							<li class="title-name">Update date:  <span class="text-filename">Sep 29, 2013</span></li>
							<li class="title-name">Update by:  <span class="text-filename"><?php echo $rs["account_id"]; ?></span></li>
						</ul>
					</div>  
				</div><!--end wrap-imageinfo -->
				<div class="grid_6">
					<form action="<?php echo $rootpath; ?>assets/html/edit_process.php" method="post" enctype="multipart/form-data">
						<div>
							<h5>Name</h5>
							<input name="item_name" type="text" size="80" value="<?php echo $rs["item_name"]; ?>" />
						</div>
						<!--div>
							<h5>Alt Text</h5>
							<input name="alt" type="text" size="80" />
						</div>
						<div>
							<h5>Link URL</h5>
							<input name="linkURL" type="text" size="80" />
						</div-->
						<div>
							<h5>Change Image</h5>
							<input name="imagefile" type="file" />
						</div>
						<div>
							<input type="submit" value="Save" />
							<input type="button" value="Delete" class="button" onclick="item_del_confirm();" />
						</div>
						<input name="sgid" type="hidden" value="<?php echo $rs["subgroup_id"]; ?>" />
						<input name="item_id" type="hidden" value="<?php echo $item_id; ?>" />
					</form>
                </div>
			</div><!--end wrap-title -->
<?php
		}//end while
?>
        </div><!--end container -->
    </div><!--end wrap-box -->
<!--js -->

<?php include($rootpath."assets/html/footer.php"); ?>