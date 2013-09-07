<?php
	$rootpath="./";
	include("assets/html/header.php");
	if($_SESSION["username"]!=""){
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
				<h4 class="head-form">Edit PDF File</h4>
				<div id="wrap-imageinfo" class="grid_5">
					<div id="mainwrapper">
						<div id="box" class="box">
							<img src="<?php echo $rootpath; ?>../images/product/<?php echo $rs["image_path"]; ?>" alt="Label Product"><br/>
						</div>
					</div><!--end mainwrapper -->
					<div id="text-info">
						<ul class="wordwrap">
							<li class="title-name">Filename:  <span class="text-filename"><?php echo $rs["image_path"]; ?></span></li>
							<li class="title-name">Update date:  <span class="text-filename"><?php echo $rs["datetime"]; ?></span></li>
							<li class="title-name">Update by:  <span class="text-filename"><?php
							$SQL2 = "
									SELECT * 
									FROM `buildthedot_nobp_account`
									WHERE `id` = '{$rs["account_id"]}' 
								";
							$db -> query($SQL2);
							if ($rs2 = $db -> fetchAssoc()) {
								echo $rs2["name"];
							}
							 ?></span></li>
						</ul>
					</div>  
				</div><!--end wrap-imageinfo -->
				<div class="grid_6">
					<form action="<?php echo $rootpath; ?>assets/html/edit_pdf_process.php" method="post" enctype="multipart/form-data">
						<div>
							<h5>Name:</h5>
							<?php echo $rs["item_name"]; ?>
						</div>
						<!--div>
							<h5>Alt Text</h5>
							<input name="alt" type="text" size="80" />
						</div>
						<div>
							<h5>Link URL</h5>
							<input name="linkURL" type="text" size="80" />
						</div-->
						<div class="margin-top-10">
							<h5>Change PDF:</h5>
						</div>
						<div class="margin-top-10">
<?php
							$SQL3="SELECT * 
								FROM  `buildthedot_nobp_item`
								WHERE `id`='{$item_id}';";
							$db->query($SQL3);
							if($rs3=$db->fetchAssoc())
							{
								$pdf_link_status=$rs3["pdf_link_status"];
								if($rs3["pdf_link_status"]=="T"){
									echo "There are pdf file. this file name is: ";
									$SQL4="SELECT * 
										FROM  `buildthedot_nobp_pdf`
										WHERE `item_id`='{$item_id}';";
									$db->query($SQL4);
									if($rs4=$db->fetchAssoc()){
										echo $rs4["pdf_link"];
									}										
								}
								elseif($rs3["pdf_link_status"]=="F"){
									echo "There are no pdf file.";
								}
							}
?>
						</div>
						<div class="margin-top-10">
							<label><input name="pdf_file_checkbox" id="group1" type="checkbox" value="value" <?php if($pdf_link_status=="T"){ ?>checked<?php } ?> />Use PDF</label>
						</div>
						<div class="margin-top-10">
							<input name="imagefile" class="group1" type="file" />
						</div>
						<div class="margin-top-20">
							<input type="submit" value="Update" onclick="" />
							<input type="button" value="Cancel" class="button" onclick="window.location.href = '<?php echo $rootpath; ?>admin-form-edit.php?id=<?php echo $_GET["id"]; ?>';" />
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

<?php
}// end if user
else{
	include ($rootpath."assets/html/login_page.php");
}

include($rootpath."assets/html/footer.php");
?>