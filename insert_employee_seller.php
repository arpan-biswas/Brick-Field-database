<?php 
	
	$con = mysqli_connect('localhost','root','');

	if(!$con)
	{
		echo 'Not Connected to server';

	}

	if(!mysqli_select_db($con,'brick')){
		echo 'datbase is not selecting'	;
	}

	$name = $_POST['username'];
	$first_name = $_POST['fn'];
	$last_name = $_POST['ln'];


	$user_level = $_POST['level'];
	
	$phone = $_POST['no'];

	
	$sql = "INSERT INTO employee(first_name,last_name,username,user_level,phone) VALUES('$first_name','$last_name','$name','$user_level','$phone')";
	if ($name!='' && $user_level!='') {
		
	

	if (!mysqli_query($con,$sql))
	{

		echo 'Not inserted.';

	}
	else{

		echo 'Signed Up Successfully';
	}

}else echo '<b>Error .Type again</b>';
	header("refresh:2; url=employeelogin.php");