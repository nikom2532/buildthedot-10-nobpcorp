<?php
$str = "b";
echo sha1(md5($str)).md5(sha1($str));
?>