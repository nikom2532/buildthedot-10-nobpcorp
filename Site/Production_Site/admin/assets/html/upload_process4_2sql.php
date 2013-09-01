<?php
$sgid=$_POST["sgid"];
$item_name=$_POST["item_name"];
$SQL=
"INSERT INTO `buildthedot_nobp_item` (
`subgroup_id` ,
`item_name` ,
`image_path` ,
`pdf_link_status`
)
VALUES (
'{$sgid}', '{$item_name}', '{$filename}',  'F'
);";
	$db->query($SQL);
	// if($rs=$db->fetchAssoc()){
		// $_SESSION["username"]=$username;
		// header("location: ./");
	// }
	header("location: ".$rootpath."./admin-form-upload.php?sgid=".$sgid."&u_suc=1");
?>