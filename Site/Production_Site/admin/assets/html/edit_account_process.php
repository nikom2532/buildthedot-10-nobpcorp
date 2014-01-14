<?php
$rootpath ="../../";
include($rootpath."assets/html/header.php");


$SQL="
SELECT * 
FROM `buildthedot_nobp_account` 
WHERE `username` = '".$_SESSION["username"]."'
;";
$db->query($SQL);
if($rs=$db->fetchAssoc()){
	$account_id=$rs["id"];
}


$SQL=
"
UPDATE  `buildthedot_nobp_account` 
SET `name` =  '{$_POST["name"]}', 
`email` = '{$_POST["email"]}'

WHERE  `id` = '{$account_id}'
;";
$db->query($SQL);
	
	// if($rs=$db->fetchAssoc()){
		// $_SESSION["username"]=$username;
		// header("location: ./");
	// }
include($rootpath."assets/html/footer.php");

	header("location: ".$rootpath."./my-account.php?sgid=".$sgid."&ec_suc=1");
?>