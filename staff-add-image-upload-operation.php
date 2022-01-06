<?php


$target_dir = "images/user-images/";
// $target_dir = "images/user/";
// $target_dir = "images/menu-items/";
// $target_dir = "images/";

/* create new name file */
$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["thumb"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

$source       = $_FILES["thumb"]["tmp_name"];
$destination  = $target_dir."{$basename}";

/* move the file */
move_uploaded_file( $source, $destination );


	
	?>