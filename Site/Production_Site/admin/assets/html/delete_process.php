<?php
$rootpath ="../../";
include($rootpath."assets/html/header.php");

$item_id=$_GET["id"];
//$rootpath=urldecode($_GET["rootpath"]);

//select Account id
$SQL="
	SELECT * 
	FROM `buildthedot_nobp_account` 
	WHERE `username` = '".$_SESSION["username"]."'
;";
$db->query($SQL);
if($rs=$db->fetchAssoc()){
	$account_id=$rs["id"];
}

//select item file and delete it
$SQL="
	SELECT `image_path`,`subgroup_id`
	FROM `buildthedot_nobp_item` 
	WHERE `id` = {$item_id}
;";
$db->query($SQL);
if($rs=$db->fetchAssoc()){
	$sgid=$rs["subgroup_id"];
	unlink($rootpath."../images/product/".$rs["image_path"]);
}

//remove item from Database
$SQL="
	DELETE FROM `buildthedot_nobp_item` 
	WHERE `id` = {$item_id}
;";
$db->query($SQL);

include($rootpath."assets/html/footer.php");

header("location: ".$rootpath."./admin-preview.php?sgid=".$sgid."&e_suc=1");
?>