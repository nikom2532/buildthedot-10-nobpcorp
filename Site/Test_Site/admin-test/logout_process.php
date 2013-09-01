<?php
$rootpath ="./";
include($rootpath."assets/html/header.php");

unset($_SESSION["username"]);

include($rootpath."assets/html/footer.php");

header("Location: ./");
?>