<?php
$sgid=$_POST["sgid"];
$item_id=$_POST["item_id"];
$item_name=$_POST["item_name"];

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
UPDATE  `buildthedot_nobp_item` 
SET `item_name` =  '{$item_name}', 
`account_id` = '{$account_id}'
WHERE  `id` = {$item_id}
;";
$db->query($SQL);
	
	// if($rs=$db->fetchAssoc()){
		// $_SESSION["username"]=$username;
		// header("location: ./");
	// }
	header("location: ".$rootpath."./admin-preview.php?sgid=".$sgid."&e_suc=1");
?>