<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["imagefile"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["imagefile"]["name"] . "<br>";
  echo "Type: " . $_FILES["imagefile"]["type"] . "<br>";
  echo "Size: " . ($_FILES["imagefile"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["imagefile"]["tmp_name"];
  }
?>