<?php

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["filename"]["name"]);


if (move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["filename"]["name"]). " has been uploaded.";
} else {
    echo "sorry, there was an error uploading your file.";


}

?>