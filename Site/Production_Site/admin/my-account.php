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
			$account_id=$rs["id"];
?>
			<div class="grid_13" id="wrap-title">
				<ul>
					<li class="active">
						My account
					</li>
				</ul>
			</div><!--end wrap-title -->
			<div class="grid_13" id="wrap-content">
				<h4 class="head-form">My account</h4>
				<div class="grid_2 title-form">
					Name
				</div>
				<div class="grid_8">
					<p>
						<?php echo $rs["name"]; ?>
					</p>
				</div>
				<br class="clear"/>
				<div class="grid_2 title-form">
					Email
				</div>
				<div class="grid_8">
					<p>
						<?php echo $rs["email"]; ?>
					</p>
				</div>
				<br class="clear"/>
				<div class="grid_2 title-form">
					Username
				</div>
				<div class="grid_8">
					<p>
						<?php echo $rs["username"]; ?>
					</p>
				</div>
				<br class="clear"/>
				<div class="grid_2 title-form">
					Password
				</div>
				<div class="grid_8" id="edit-pass">
					<a href="edit-password.php">Edit password</a>
				</div>
				<!--button -->
				<div class="grid_8 prefix_2 edit-link">
					<a href="edit-my-account.php" class="btn-blue">Edit Account</a>
				</div>
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
