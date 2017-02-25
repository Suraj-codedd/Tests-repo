<?php
// call model page(index.html)
include" dbconnect.php";

//below is regfrm_controller.php code

//grab user input param
$fname=$_POST['firs_name'];
$lname=$_POST['last_name'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$phone=$_POST['phone_no'];
$email=$_POST['email']; 
$username=$_POST['username'];
$passcode=$_POST['passcode']; 

//post into database
$sql="INSERT INTO nreporters
  (first_name,last_name,country,gender,phone_number,email,username,passcode) 
 VALUES
  ('$fname','$lname','$country','$state','$phone','$email','$username','$passcode')";
   mysql_query($sql) or die(mysql_error());

// If the form has been sucessfully submitted
$success_msg = '<P>Registration sucessfull !.</P>';

  if ($sql= 1) {
echo "$success_msg";
	}else{
		
error_log(mysql_error());
$success_msg = '<P>Error! not registered.</P>';
}
?> 