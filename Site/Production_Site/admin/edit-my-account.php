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
						<li>
							<a href="my-account.html">My account</a>
						</li>
						<li>
							>
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
						<input name="name" type="text" size="50">
					</div>
					<br class="clear"/>
					<div class="grid_3 title-form">
						Email
					</div>
					<div class="grid_8">
						<input name="email" type="text" size="50">
					</div>
					<br class="clear"/>
					<div class="grid_3 title-form">
						Username
					</div>
					<div class="grid_8">
						<input name="username" type="text" size="50">
					</div>
					<br class="clear"/>
					<div class="grid_3 title-form">
						Old password
					</div>
					<div class="grid_8">
						<input name="oldpass" type="text" size="50">
					</div>
					<br class="clear"/>
					<div class="grid_3 title-form">
						New password
					</div>
					<div class="grid_8">
						<input name="newpass" type="text" size="50">
					</div>
					<br class="clear"/>
					<!--button -->
					<div class="grid_5 prefix_2">
						<input type="submit" value="Save">
						<input type="button" value="Cancel" class="button">
					</div>
				</div><!--end wrap-title -->
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