<?
				
		$id=$_GET['id'];
		
		// connect to the database
        include('connect-db.php');
 
        // get results from database
        $result = mysql_query("SELECT * FROM buildthedot_nobp_item_pdf WHERE item_id = ".$id) or die(mysql_error()); 
		
		// loop through results of database query
        while($row = mysql_fetch_array( $result )) {
			$file_name = $row['pdf_link'];
		}
		
		$filepath="pdf/";
		$filename=$filepath.$file_name;
		//$filename=$filepath.$file_name.".pdf";
		
		
		
// fix for IE catching or PHP bug issue
header("Pragma: public");
header("Expires: 0"); // set expiration time
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
// browser must download file from server instead of cache

// force download dialog
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");

// use the Content-Disposition header to supply a recommended filename and
// force the browser to display the save dialog.
header("Content-Disposition: attachment; filename=".basename($filename).";");

/*
The Content-transfer-encoding header should be binary, since the file will be read
directly from the disk and the raw bytes passed to the downloading computer.
The Content-length header is useful to set for downloads. The browser will be able to
show a progress meter as a file downloads. The content-lenght can be determines by
filesize function returns the size of a file.
*/
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".filesize($filename));

readfile("$filename");
exit();						
?>
