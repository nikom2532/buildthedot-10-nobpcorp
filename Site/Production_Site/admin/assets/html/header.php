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
<link rel="stylesheet" href="<?php echo $rootpath; ?>css/admin/base.css">
<link rel="stylesheet" href="<?php echo $rootpath; ?>css/normalize.css" type="text/css">
<link rel="stylesheet" href="<?php echo $rootpath; ?>css/admin/960.css">
<link rel="stylesheet" href="<?php echo $rootpath; ?>css/admin/adminStyle.css" type="text/css">
<?php if($_SESSION["username"]==""){ ?>
	<link href="<?php echo $rootpath; ?>css/admin/form.css" rel="stylesheet" type="text/css">
<?php } ?>
<!--icon -->
<link rel="shortcut icon" href="css/images/favicon.ico">
<link rel="apple-touch-icon" href="css/images/icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="css/images/icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="css/images/icon-114x114.png">
<link href="<?php echo $rootpath; ?>css/jquery_notification.css" type="text/css" rel="stylesheet"/>

</head>

<body>