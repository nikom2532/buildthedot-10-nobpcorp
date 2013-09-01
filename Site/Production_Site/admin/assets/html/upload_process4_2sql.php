<?php
$sgid=$GET["sgid"];
$SQL=
"INSERT INTO `buildthedot_nobp_item` (
`subgroup_id` ,
`item_name` ,
`image_path` ,
`pdf_link_status`
)
VALUES (
'1',  '{$sgid}',  '{$filename}',  'n'
);";
	$db->query($SQL);
	// if($rs=$db->fetchAssoc()){
		// $_SESSION["username"]=$username;
		// header("location: ./");
	// }
?>