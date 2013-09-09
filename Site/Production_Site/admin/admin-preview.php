<?php
	$rootpath="./";
	include("assets/html/header.php");
	if($_SESSION["username"]!=""){
		
		include ($rootpath . "assets/html/header2.php");
?>
	<div class="grid_13" id="wrap-title">
		<ul>
			<li>
				<a href="#"><?php echo $group_name; ?></a>
			</li>
			<li>
				&gt;
			</li>
			<li>
				<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=<?php echo $_GET["sgid"]; ?>" class="active"><?php echo $subgroup_name; ?></a>
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
<?php
					if($_GET["page"] ==""){
						$_GET["page"] = 1;
					}
					$SQL="
						SELECT *
						FROM  `buildthedot_nobp_item`
						WHERE `subgroup_id` = \"{$_GET["sgid"]}\" ;";
					$db->query($SQL);
					$numberPage=(($db->numRows())/16.0);
					//echo $numberPage;
					//echo (int)$numberPage;
					if((int)$numberPage != $numberPage){
						$numberPage = (int)$numberPage + 1; 
					}
					else{
						$numberPage = (int)$numberPage;
					}
					//echo $numberPage;
					if($numberPage>1){	
						if($_GET["page"] > 1){
?>
							<li>
								<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=<?php echo $_GET["sgid"]; ?>&page=<?php echo $_GET["page"]-1; ?>">&lt;&lt;</a>
							</li>
<?php
						}
						else{
?>
							<li>
								&lt;&lt;
							</li>
<?php
						}
					}
					if($numberPage>1){	
						for($i=1;$i<=$numberPage;$i++){
	?>
							<li <?php if($i==$_GET["page"]){ ?> class="active-page" <?php } ?>>
								<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=<?php echo $_GET["sgid"]; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
							</li>
	<?php
						}
					}
					if($numberPage>1){	
						if($_GET["page"] != $numberPage){
?>
							<li>
								<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=<?php echo $_GET["sgid"]; ?>&page=<?php echo $_GET["page"]+1; ?>">&gt;&gt;</a>
							</li>
<?php
						}
						else{
?>
							<li>
								&gt;&gt;
							</li>
<?php
						}
					}
?>
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
					LIMIT ".(16*($_GET["page"]-1)).",16";
				/*
				if($_GET["page"]==1){
					$SQL .= "0,16; ";
				}
				elseif($_GET["page"]==2){
					$SQL .= "16,16; ";
				}
				elseif($_GET["page"]>2){
					//$SQL .= (($_GET["page"]-1)*16)).",16; ";
					$SQL .= (16+(16*($_GET["page"]-2))).",16; ";
				}
				*/
				//LIMIT (page*16)-1,16
				//0, 16, 16+16, 16+32
				$db->query($SQL);
				while($rs=$db->fetchAssoc()){
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
<?php
						if(($db->numRows()) < 4 ){
							if(($db->numRows()) == 1 ){
?>
								<div class="grid_9">
<?php
							}
							elseif(($db->numRows()) == 2 ) {
?>
								<div class="grid_6">
<?php
							}
							elseif(($db->numRows()) == 3 ) {
?>
								<div class="grid_6">
<?php
							}
?>
								</div>
<?php
						}
?>
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
	include ($rootpath."assets/html/footer.php");
?>
