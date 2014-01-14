<?php
//$rootpath ="../Site/Production_Site/admin/";
$rootpath ="../../../";
include($rootpath."assets/html/header.php");

for($i=0;$i<=108;$i++){
	echo $SQL = "
	UPDATE  `buildthedot_nobp_item` 
	SET `account_id` = '1', `datetime` = NOW()
	WHERE  `id` = {$i}
	;";
	echo "<br />";
	$db->query($SQL);
}

include($rootpath."assets/html/footer.php");
?>