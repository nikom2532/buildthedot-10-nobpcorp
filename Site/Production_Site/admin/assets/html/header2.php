<div id="wrap-header">
	<div class="container_16">
		<div id="wrap-logo" class="grid_3">
			<a href="<?php echo $rootpath; ?>"><img src="images/logo_nodesc.png"></a>
		</div>
		<div class="grid_7 prefix_5" id="wrap-setting">
			<ul class="right">
				<li>
					<?php
					$SQL = "select `name` from `buildthedot_nobp_account` where `username`=\"" . $_SESSION["username"] . "\" ;";
					$db -> query($SQL);
					if ($rs = $db -> fetchAssoc()) {
						echo $rs["name"];
					}
					?>
				</li>
				<li class="btn btn-blue"
				>
					<a href="<?php echo $rootpath; ?>my-account.php">My Account</a>
				</li>
				<li class="btn btn-grey">
					<a href="<?php echo $rootpath; ?>assets/html/logout_process.php">Sign out</a>
				</li>
			</ul>

		</div>
	</div><!--end container_16 -->
</div><!--end wrap-header -->
<?php
	$SQL="SELECT * FROM `buildthedot_nobp_item_subgroup` WHERE `id`= '".$_GET["sgid"]."';";
	$db->query($SQL);
	if($rs=$db->fetchAssoc()){
		$subgroup_name = $rs["subgroup_name"];
		$SQL2="SELECT * FROM `buildthedot_nobp_item_group` WHERE `id`= '".$rs["group_id"]."' ";
		$db->query($SQL2);
		if($rs2=$db->fetchAssoc()){
			$group_name=$rs2["group_name"];
		}
	}
?>
<div>
	<div class="container_16" id="wrap-box">
		<div id="accordian" class="grid_2">
			<ul>
				<li <?php if($_GET["sgid"]>=1&&$_GET["sgid"]<=3){?>class="active"<?php } ?>>
					<h3><span class="icon-dashboard"></span>Label</h3>
					<ul>
						<li <?php if($_GET["sgid"]==1){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=1">Barcode Label</a>
						</li>
						<li <?php if($_GET["sgid"]==2){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=2">Wiremark Label</a>
						</li>
						<li <?php if($_GET["sgid"]==3){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=3">Safety Signs Label</a>
						</li>
					</ul>
				</li>
				<!-- we will keep this LI open by default -->
				<li <?php if($_GET["sgid"]==4||$_GET["sgid"]==5||$_GET["sgid"]==6||$_GET["sgid"]==7){?>class="active"<?php } ?>>
					<h3><span class="icon-tasks"></span>Printer</h3>
					<ul>
						<li <?php if($_GET["sgid"]==4){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=4">Safety Printer</a>
						</li>
						<li <?php if($_GET["sgid"]==5){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=5">Wiremark Printer</a>
						</li>
						<li <?php if($_GET["sgid"]==6){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=6">Barcode Printer</a>
						</li>
						<li <?php if($_GET["sgid"]==7){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=7">Other Printer</a>
						</li>
					</ul>
				</li>
				<li <?php if($_GET["sgid"]>=8&&$_GET["sgid"]<=13){?>class="active"<?php } ?>>
					<h3><span class="icon-calendar"></span>Lockout</h3>
					<ul>
						<li <?php if($_GET["sgid"]==8){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=8">Electrical Lockout</a>
						</li>
						<li <?php if($_GET["sgid"]==9){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=9">Valve Lockout</a>
						</li>
						<li <?php if($_GET["sgid"]==10){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=10">Log out Station</a>
						</li>
						<li <?php if($_GET["sgid"]==11){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=11">Tags/Group Lock Bock</a>
						</li>
						<li <?php if($_GET["sgid"]==12){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=12">Padlock/hasps</a>
						</li>
						<li <?php if($_GET["sgid"]==13){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=13">Others</a>
						</li>
					</ul>
				</li>
				<li <?php if($_GET["sgid"]>=14&&$_GET["sgid"]<=14){?>class="active"<?php } ?>>
					<h3><span class="icon-heart"></span>Electrical</h3>
					<ul>
						<li <?php if($_GET["sgid"]==14){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=14">Electrical</a>
						</li>
					</ul>
				</li>
				<li <?php if($_GET["sgid"]>=15&&$_GET["sgid"]<=17){?>class="active"<?php } ?>>
					<h3><span class="icon-heart"></span>Safety Signs</h3>
					<ul>
						<li <?php if($_GET["sgid"]==15){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=15">Brady Glo</a>
						</li>
						<li <?php if($_GET["sgid"]==16){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=16">Pipemarker</a>
						</li>
						<li <?php if($_GET["sgid"]==17){ ?>class="btn-blue"<?php } ?>>
							<a href="<?php echo $rootpath; ?>admin-preview.php?sgid=17">Safety Signs</a>
						</li>
					</ul>
				</li>
			</ul>
		</div><!--end accordian-->