<?php
$sgid=$_POST["sgid"];
$item_id=$_POST["item_id"];
$item_name=$_POST["item_name"];
$SQL="
SELECT `image_path`
FROM  `buildthedot_nobp_item`
WHERE `id` = '{$item_id}'
;";
$db->query($SQL);
if($rs=$db->fetchAssoc()){
	unlink($rootpath."../images/product/".$rs["image_path"]);
}

//echo "<br/><br/>";

$SQL="
SELECT * 
FROM `buildthedot_nobp_account` 
WHERE `username` = '".$_SESSION["username"]."'
;";
$db->query($SQL);
if($rs=$db->fetchAssoc()){
	$account_id=$rs["id"];
}

echo $SQL="
UPDATE `buildthedot_nobp_item`
SET `item_name` = '{$item_name}', `image_path` = '{$filename}', `account_id` = '{$account_id}'
WHERE  `id` = {$item_id};
;";
	$db->query($SQL);
	// if($rs=$db->fetchAssoc()){
		// $_SESSION["username"]=$username;
		// header("location: ./");
	// }
	header("location: ".$rootpath."./admin-form-edit.php?sgid=".$sgid."&e_suc=1");
?>