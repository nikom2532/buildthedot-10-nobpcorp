<?php
if ($_FILES["imagefile"]["error"] > 0)
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

<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["imagefile"]["name"]);
$extension = end($temp);
if ((($_FILES["imagefile"]["type"] == "image/gif")
|| ($_FILES["imagefile"]["type"] == "image/jpeg")
|| ($_FILES["imagefile"]["type"] == "image/jpg")
|| ($_FILES["imagefile"]["type"] == "image/pjpeg")
|| ($_FILES["imagefile"]["type"] == "image/x-png")
|| ($_FILES["imagefile"]["type"] == "image/png"))
&& ($_FILES["imagefile"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["imagefile"]["error"] > 0)
    {
    echo "Error: " . $_FILES["imagefile"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["imagefile"]["name"] . "<br>";
    echo "Type: " . $_FILES["imagefile"]["type"] . "<br>";
    echo "Size: " . ($_FILES["imagefile"]["size"] / 1024) . " kB<br>";
    echo "Stored in: " . $_FILES["imagefile"]["tmp_name"];


    if (file_exists("upload/" . $_FILES["imagefile"]["name"]))
      {
      echo $_FILES["imagefile"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["imagefile"]["tmp_name"],
      "upload/" . $_FILES["imagefile"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["imagefile"]["name"];
      }

    }
  }
else
  {
  echo "Invalid file";
  }
?>