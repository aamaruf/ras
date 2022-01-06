<?php


$target_dir = "images/menu-items/";

/* create new name file */
$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["thumb"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

$source       = $_FILES["thumb"]["tmp_name"];
$destination  = $target_dir."{$basename}";

/* move the file */
move_uploaded_file( $source, $destination );


// $target_file = $target_dir . basename($_FILES["thumb"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["thumb"]["tmp_name"]);
//   if($check !== false) {
//     // echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
// 	echo '<script>alert("File is not an image.")</script>';

//     $uploadOk = 0;
//   }
// }


// // // Check if file already exists
// if (file_exists($target_file)) {
//   echo '<script>alert("Sorry, file already exists.")</script>';
//   $uploadOk = 0;
// }

// // // Check file size
// if ($_FILES["thumb"]["size"] > 500000) {
// 	echo '<script>alert("Sorry, your file is too large.")</script>';
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
// 	echo '<script>alert("Only JPG, JPEG, PNG & GIF files are allowed.")</script>';
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
// 	echo '<script>alert("File was not uploaded.")</script>';
// // if everything is ok, try to upload file
// } else {
// 	$currentDirectory = getcwd();
// 	// echo "currentdir".$currentDirectory.'/'.$target_file;
//   if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $currentDirectory.'/'.$target_file)) {
//     // echo "The file ". htmlspecialchars( basename( $_FILES["thumb"]["name"])). " has been uploaded.";
//   } else {
// 	echo '<script>alert("There was an error uploading your file.")</script>';
//   }

// }
	
	?>