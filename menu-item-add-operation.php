<?php
   $name=$_POST['name'];
   $price =$_POST['price'];
   $details =$_POST['details'];

   include 'menu-item-image-upload-operation.php';

   $thumb = $destination; 

	require_once('dbconnect.php');
	$sql = "INSERT INTO `MENU_ITEM`(`MENU_ITEM_NAME`, `MENU_ITEM_PRICE`, `MENU_ITEM_DETAILS`, `MENU_ITEM_THUMB`) 
	VALUES ('$name','$price','$details','$thumb')";
                                  
	$confirm = mysqli_query($con,$sql);
	echo $confirm;
	if($confirm)
	{
		echo '<script> alert("New Item Added...");</script>';
		echo "<script>window.open('menu-item.php','_self')</script>";
	}
	
	else
	{
		echo '<script> alert("Something went!! Try again");</script>';
		echo "<script>window.open('menu-item.php','_self')</script>";
	}
     mysqli_close($con);
	
	?>