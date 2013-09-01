<?php
$rootpath ="../../";
include($rootpath."assets/html/header.php");

if ($_FILES["imagefile"]["error"] > 0) {
	echo "Error: " . $_FILES["imagefile"]["error"] . "<br>";
} else {
	echo "Upload: " . $_FILES["imagefile"]["name"] . "<br>";
	echo "Type: " . $_FILES["imagefile"]["type"] . "<br>";
	echo "Size: " . ($_FILES["imagefile"]["size"] / 1024) . " kB<br>";
	echo "Stored in: " . $_FILES["imagefile"]["tmp_name"];
}
?>

<?php
$target_path = $rootpath."../images/product/";
$filename = $_POST["sgid"]."_".strtotime("now")."_".basename($_FILES["imagefile"]['name']);
$target_path = $target_path . $filename;

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["imagefile"]["name"]);
$extension = end($temp);
if ((($_FILES["imagefile"]["type"] == "image/gif")
|| ($_FILES["imagefile"]["type"] == "image/jpeg")
|| ($_FILES["imagefile"]["type"] == "image/jpg")
|| ($_FILES["imagefile"]["type"] == "image/pjpeg")
|| ($_FILES["imagefile"]["type"] == "image/x-png")
|| ($_FILES["imagefile"]["type"] == "image/png"))
//&& ($_FILES["imagefile"]["size"] < 200000)
&& in_array($extension, $allowedExts)){
	if ($_FILES["imagefile"]["error"] > 0) {
		echo "Error: " . $_FILES["imagefile"]["error"] . "<br />";
	} else {
		if (move_uploaded_file($_FILES["imagefile"]['tmp_name'], $target_path)) {
			echo "The file " . basename($_FILES["imagefile"]['name']) . " has been uploaded";
			include($rootpath."assets/html/upload_process4_2sql.php");
		} else {
			echo "There was an error uploading the file, please try again!";
		}
	}
} else {
	echo "Invalid file";
}

include($rootpath."assets/html/footer.php");
?>