<?php
session_start(); 

	$email=$_POST['email'];
	$password =$_POST['password'];
	
    require_once('dbconnect.php');

	$sql = "SELECT * FROM REGISTERED_USER WHERE REGISTERED_USER_EMAIL = '$email' and REGISTERED_USER_PASSWORD = '$password'";

	  $result = mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
      if($count == 1) {
		$sql1 = "SELECT REGISTERED_USER_ID FROM REGISTERED_USER WHERE REGISTERED_USER_EMAIL='$email'";
     	
	                                 $result = $con->query($sql1);
                                 
                                      if ($result->num_rows > 0) { 
                                      while($row = $result->fetch_assoc()) {

                                      $REGISTERED_USER_ID =	$row["REGISTERED_USER_ID"];
									  }
									  }
									  
					$_SESSION['REGISTERED_USER_ID']= $REGISTERED_USER_ID;
         echo 'alert($REGISTERED_USER_ID)';
         echo "<script>window.open('dashboard.php','_self')</script>";
  }
   else {
          echo '<script language="javascript">';
         echo 'alert("User Email / Password did not matched\r\nTry again...")';
         echo '</script>';
		 echo "<script>window.open('index.php','_self')</script>";
      }
	  
?>