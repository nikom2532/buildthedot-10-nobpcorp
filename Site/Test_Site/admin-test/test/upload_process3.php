<?php

$target_path = "upload/";

$target_path = $target_path . basename( $_FILES["imagefile"]['name']); 

if(move_uploaded_file($_FILES["imagefile"]['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES["imagefile"]['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

?>