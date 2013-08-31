<?php
	$SQL=
"INSERT INTO `buildthedot_nobp_item` (
`id` ,
`subgroup_id` ,
`item_name` ,
`image_path` ,
`pdf_link_status`
)
VALUES (
NULL ,  '1',  '1',  '{$filename}',  'y'
);";
	$db->query($SQL);
	// if($rs=$db->fetchAssoc()){
		// $_SESSION["username"]=$username;
		// header("location: ./");
	// }
?>