﻿<?php
$sgid=$_POST["sgid"];
$item_id=$_POST["item_id"];
$item_name=$_POST["item_name"];
echo $SQL=
"
UPDATE  `buildthedot_nobp_item` 
SET `item_name` =  '{$item_name}'
WHERE  `id` = {$item_id}
;";
	$db->query($SQL);
	// if($rs=$db->fetchAssoc()){
		// $_SESSION["username"]=$username;
		// header("location: ./");
	// }
	header("location: ".$rootpath."./admin-form-edit.php?sgid=".$sgid."&e_suc=1");
?>