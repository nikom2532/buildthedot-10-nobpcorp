<?php
$sgid=$_POST["sgid"];
$item_name=$_POST["item_name"];

//echo "<br />";
echo $SQL = "
SELECT * 
FROM  `buildthedot_nobp_account` 
WHERE `username` = '".$_SESSION["username"]."'
";
$db->query($SQL);
if($rs=$db->fetchAssoc()){
	$user_id = $rs["id"];
}
//echo $user_id."<br />";


echo $SQL=
"INSERT INTO `buildthedot_nobp_item` (
`subgroup_id` ,
`item_name` ,
`image_path` ,
`pdf_link_status` ,
`account_id` ,
`datetime`
)
VALUES (
'{$sgid}', '{$item_name}', '{$filename}',  'F',  '{$user_id}',  NOW()
);";
	$db->query($SQL);
	// if($rs=$db->fetchAssoc()){
		// $_SESSION["username"]=$username;
		// header("location: ./");
	// }
	header("location: ".$rootpath."./admin-preview.php?sgid=".$sgid."&u_suc=1");
?>