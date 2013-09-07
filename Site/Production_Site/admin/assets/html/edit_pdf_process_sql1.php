<?php
$sgid=$_POST["sgid"];
$item_id=$_POST["item_id"];
//$item_name=$_POST["item_name"];

$SQL="
SELECT * 
FROM `buildthedot_nobp_account` 
WHERE `username` = '".$_SESSION["username"]."'
;";
$db->query($SQL);
if($rs=$db->fetchAssoc()){
	$account_id=$rs["id"];
}

$SQL="
	SELECT * 
	FROM `buildthedot_nobp_item` 
	WHERE `id` = '{$item_id}'
;";
$db->query($SQL);
if($rs=$db->fetchAssoc()){
	if($rs["pdf_link_status"]=="T"){
		$SQL2="
			SELECT * 
			FROM `buildthedot_nobp_item_pdf` 
			WHERE `item_id` = '{$item_id}'
		;";
		$db->query($SQL2);
		if($rs2=$db->fetchAssoc()){
			$pdf_link=$rs2["pdf_link"];
			unlink($rootpath."../pdf/".$pdf_link);
		}
		
		$SQL2="
			UPDATE `buildthedot_nobp_item_pdf`
			SET `pdf_link` = '{$filename}'
			WHERE `item_id` = '{$item_id}'
		;";
		$db->query($SQL2);
	}
	elseif($rs["pdf_link_status"]=="F"){
	echo	$SQL2="
			INSERT INTO `buildthedot_nobp_item_pdf` (
				`item_id`, `pdf_link`
			)
			VALUES (
				'{$item_id}', '{$filename}'
			)
		;";
		$db->query($SQL2);
	}
}

echo $SQL="
	UPDATE  `buildthedot_nobp_item` 
	SET `pdf_link_status` =  'T', 
	`account_id` = '{$account_id}',
	`datetime` = NOW()
	WHERE  `id` = '{$item_id}'
;";
$db->query($SQL);

	header("location: ".$rootpath."./admin-form-edit.php?id=".$item_id."&e_suc=1");
?>