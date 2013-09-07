<?php
$rootpath ="../../";
include($rootpath."assets/html/header.php");

$oldpass=$_POST["oldpass"];
$newpass=$_POST["newpass"];
$renewpass=$_POST["renewpass"];

include($rootpath."assets/html/footer.php");

$SQL="
	SELECT * 
	FROM `buildthedot_nobp_account` 
	WHERE `username` = '".$_SESSION["username"]."'
;";
$db->query($SQL);
if($rs=$db->fetchAssoc()){
	$account_id=$rs["id"];
	$password=$rs["password"];
}
$oldpass=sha1(md5($oldpass)).md5(sha1($oldpass));
if($oldpass==$password){
	if($newpass!=$renewpass){
		header("location: ".$rootpath."./edit-password.php?e_error1=2");
	}
	else{
		$newpass=sha1(md5($newpass)).md5(sha1($newpass));
		$SQL="
			UPDATE `buildthedot_nobp_account` 
			SET `password` = '{$newpass}' 
			WHERE  `buildthedot_nobp_account`.`id` = {$account_id}
		;";
		$db->query($SQL);
		header("location: ".$rootpath."./my-account.php?e_suc=1");
	}
}
else{
	header("location: ".$rootpath."./edit-password.php?e_error1=1");
}

?>