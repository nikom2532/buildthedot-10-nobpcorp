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
				<form action="<?php echo $rootpath; ?>assets/html/edit_account_password_process.php" method="post" enctype="multipart/form-data">
					<div class="grid_13" id="wrap-title">
						<ul>
							<li>
								<a href="my-account.php">My account</a>
							</li>
							<li>
								&gt;
							</li>
							<li class="active">
								Edit password</a>
						</ul>
					</div><!--end wrap-title -->
					<div class="grid_13" id="wrap-content">
						<h4 class="head-form">Change password</h4>
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
						<div class="grid_3 title-form">
							Re-type new password
						</div>
						<div class="grid_8">
							<input name="renewpass" type="text" size="50" />
						</div>
						<br class="clear"/>
						<!--button -->
						<div class="grid_5 prefix_3">
							<input type="submit" value="Save">
							<input type="button" value="Cancel" class="button">
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