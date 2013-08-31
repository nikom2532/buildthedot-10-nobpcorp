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
<!--css -->
<link rel="stylesheet" href="css/admin/base.css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/admin/960.css">
<link href="css/admin/adminStyle.css" rel="stylesheet" type="text/css">
<!--icon -->
<link rel="shortcut icon" href="css/images/favicon.ico">
<link rel="apple-touch-icon" href="css/images/icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="css/images/icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="css/images/icon-114x114.png">

<script src="js/prefix.js"jquery-l.js></script>
<script src="js/jquery-1.7.1.min.js"jquery-l.js></script>
<script type="text/javascript">
/*jQuery time*/
$(document).ready(function(){
	$("#accordian h3").click(function(){
		//slide up all the link lists
		$("#accordian ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})
</script>
</head>

<body>