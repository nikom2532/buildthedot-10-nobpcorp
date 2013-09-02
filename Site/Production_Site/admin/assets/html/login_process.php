<?php
$rootpath ="../../";
include($rootpath."assets/html/header.php");

if(($username!="")&&($password!="")) {

	$username = htmlspecialchars(trim($_POST["username"]),ENT_QUOTES);
	$password_source = htmlspecialchars(trim($_POST["password"]),ENT_QUOTES);
	$password = sha1(md5("$password_source")).md5(sha1("$password_source"));
	unset($password_source);

	$SQL=
"select `username`, `password`, `admin_status`, `account_enable`, `name`
from `buildthedot_nobp_account`
where `username`=\"$username\" and `password`=\"".$password."\" and `admin_status`=\"y\" and `account_enable`=\"y\";";
	$db->query($SQL);
	if($rs=$db->fetchAssoc()){
		$_SESSION["username"]=$username;
		//$_SESSION["name"]=$rs["name"];
		header("location: {$rootpath}admin-preview.php?sgid=1");
	}
	else{
?>
		<form id="login_false_message" action="index.php" method="POST">
			<input type="hidden" id="login_messaage" name="login_messaage" value="login_false" />
		</form-->
		<script>
			document.getElementById("login_false_message").submit();
		</script>
<?php
	}
}

include($rootpath."assets/html/footer.php");

?>