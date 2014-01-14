<?php
	$rootpath="./";
	include("assets/html/header.php");
	if($_SESSION["username"]!=""){
		
		include ($rootpath . "assets/html/header2.php");
			$SQL="
				SELECT * 
				FROM `buildthedot_nobp_account` 
				WHERE `username` = '".$_SESSION["username"]."'
			;";
			$db->query($SQL);
			if($rs=$db->fetchAssoc()){
?>
				<form action="<?php echo $rootpath; ?>assets/html/edit_account_process.php" method="post" enctype="multipart/form-data">
					<div class="grid_13" id="wrap-title">
						<ul>
							<li>
								<a href="my-account.php">My account</a>
							</li>
							<li>
								&gt;
							</li>
							<li class="active">
								Edit Account
							</li>
						</ul>
					</div><!--end wrap-title -->
					<div class="grid_13" id="wrap-content">
						<h4 class="head-form">My account</h4>
						<div class="grid_3 title-form">
							Name
						</div>
						<div class="grid_8">
							<input name="name" type="text" size="50" value="<?php echo $rs["name"]; ?>" />
						</div>
						<br class="clear"/>
						<div class="grid_3 title-form">
							Email
						</div>
						<div class="grid_8">
							<input name="email" type="text" size="50" value="<?php echo $rs["email"]; ?>" />
						</div>
						<br class="clear"/>
						<?php /* ?>
						<div class="grid_3 title-form">
							Username
						</div>
						<div class="grid_8">
							<input name="username" type="text" size="50" value="<?php echo $rs["username"]; ?>" />
						</div>
						<br class="clear"/>
						<div class="grid_3 title-form">
							Old password
						</div>
						<div class="grid_8">
							<input name="oldpass" type="text" size="50" />
						</div>
						<br class="clear"/>
						<div class="grid_3 title-form">
							New password
						</div>
						<div class="grid_8">
							<input name="newpass" type="text" size="50" />
						</div>
						<br class="clear"/>
						<?php */ ?>
						<!--button -->
						<div class="grid_5 prefix_2">
							<input type="submit" value="Save" />
							<!-- <a href="<?php echo $rootpath; ?>my-account.php"><input type="button" value="Cancel" class="button" /></a> -->
							<input type="button" value="Cancel" class="button" onclick="window.location.href = '<?php echo $rootpath; ?>my-account.php';" />
						</div>
					</div><!--end wrap-title -->
				</form>
					
				</div><!--end container -->
			</div><!--end wrap-box -->
			<!--js -->
<?php
		}
	}
	else{
		include ($rootpath."assets/html/login_page.php");
	}
	include ($rootpath."assets/html/footer.php");
?>