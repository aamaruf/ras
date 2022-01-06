<?php
   $name=$_POST['name'];
   $mobile =$_POST['mobile'];
   $email =$_POST['email'];
   $type =$_POST['type'];
   $password = '123456';

   
   include 'staff-add-image-upload-operation.php';

   $thumb = $destination; 

date_default_timezone_set('Asia/Dhaka');    
$currentdate = date('Y-m-d'); 

	require_once('dbconnect.php');
	$sql = "INSERT INTO `STAFF`(`STAFF_NAME`, `STAFF_MOBILE`, `STAFF_EMAIL`, `STAFF_PASSWORD`, `STAFF_TYPE`, `STAFF_AVATAR`, `STAFF_APPOINTED`) 
	VALUES ('$name','$mobile','$email','$password','$type','$thumb','$currentdate')";
                                  
	$confirm = mysqli_query($con,$sql);
	echo $confirm;
	if($confirm)
	{
		echo '<script> alert("New Staff Added...");</script>';
		echo "<script>window.open('staff.php','_self')</script>";
	}
	
	else
	{
		echo '<script> alert("Something went!! Try again");</script>';
		echo "<script>window.open('staff.php','_self')</script>";
	}
     mysqli_close($con);
	
	?>