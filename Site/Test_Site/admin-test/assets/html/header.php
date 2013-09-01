<?php
session_start();
include($rootpath."lib/func_date.php");
include($rootpath."lib/db.php");
include($rootpath."lib/conn.inc.php");
if (!$db->open()){
        die($db->error());
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NOBP Corporation Group Co.,Ltd.</title>
<?php $db->query("SET NAMES 'utf8'");	//set mysql UTF-8 ?>
</head>
<body>