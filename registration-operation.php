
<?php

//echo '<script language="javascript">';
//echo 'alert("message successfully sent")';
//echo '</script>'; 
   
	$name=$_POST['name'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	$mobile =$_POST['mobile']; 

	require_once('dbconnect.php');
	

	     date_default_timezone_set('Asia/Dhaka');    
        $currentdate = date('Y-m-d'); 
								

	$sql = "INSERT INTO `REGISTERED_USER`(`REGISTERED_USER_NAME`, `REGISTERED_USER_DATE`, `REGISTERED_USER_MOBILE`, `REGISTERED_USER_EMAIL`, `REGISTERED_USER_PASSWORD`) 
	VALUES ('$name','$currentdate','$mobile','$email','$password')";
                                  
	$confirm = mysqli_query($con,$sql);
	
	if($confirm)
	{
		echo '<script> alert("Sign Up Successful \r\nSignin to continue...");</script>';
		echo "<script>window.open('index.php','_self')</script>";
	}
	
	else
	{
		echo '<script> alert("Error!! Try again");</script>';
		echo "<script>window.open('registration.php','_self')</script>";
	}
	
     mysqli_close($con);
	 

	?>