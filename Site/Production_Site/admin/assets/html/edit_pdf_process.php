<?php
$rootpath ="../../";
include($rootpath."assets/html/header.php");

$pdf_file_checkbox=$_POST["pdf_file_checkbox"];
/*
if($pdf_file_checkbox!=""){
	echo $pdf_file_checkbox;
}
*/

if($pdf_file_checkbox!=""){
	
	if ($_FILES["pdffile"]["error"] > 0) {
		echo "Error: " . $_FILES["pdffile"]["error"] . "<br>";
	} else {
		echo "Upload: " . $_FILES["pdffile"]["name"] . "<br>";
		echo "Type: " . $_FILES["pdffile"]["type"] . "<br>";
		echo "Size: " . ($_FILES["pdffile"]["size"] / 1024) . " kB<br>";
		echo "Stored in: " . $_FILES["pdffile"]["tmp_name"];
	}
	?>
	
	<?php
	$target_path = $rootpath."../pdf/";
	$filename = $_POST["sgid"]."_".strtotime("now")."_".basename($_FILES["pdffile"]['name']);
	$target_path = $target_path . $filename;
	
	$allowedExts = array("gif", "jpeg", "jpg", "png", "pdf");
	$temp = explode(".", $_FILES["pdffile"]["name"]);
	$extension = end($temp);
	
	if ((($_FILES["pdffile"]["type"] == "image/gif")
	|| ($_FILES["pdffile"]["type"] == "image/jpeg")
	|| ($_FILES["pdffile"]["type"] == "image/jpg")
	|| ($_FILES["pdffile"]["type"] == "image/pjpeg")
	|| ($_FILES["pdffile"]["type"] == "image/x-png")
	|| ($_FILES["pdffile"]["type"] == "application/pdf")
	|| ($_FILES["pdffile"]["type"] == "image/png"))
	//&& ($_FILES["pdffile"]["size"] < 200000)
	&& in_array($extension, $allowedExts)){
		if ($_FILES["pdffile"]["error"] > 0) {
			echo "Error: " . $_FILES["pdffile"]["error"] . "<br />";
		} else {
			if (move_uploaded_file($_FILES["pdffile"]['tmp_name'], $target_path)) {
				echo "The file " . basename($_FILES["pdffile"]['name']) . " has been uploaded";
				include($rootpath."assets/html/edit_pdf_process_sql1.php");
			} else {
				echo "There was an error uploading the file, please try again!";
			}
		}
	} else {
		echo "Invalid file";
	}
	//echo "a";
}
else{
	//echo "b";
	include($rootpath."assets/html/edit_pdf_process_sql2.php");
}

include($rootpath."assets/html/footer.php");
?>