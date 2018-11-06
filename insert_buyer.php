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


	$email = $_POST['email'];

	$password = $_POST['pass'];
	$confirm_password = $_POST['conpass'];
	$sql = "INSERT INTO buyer_signup(first_name,last_name,username,email,password) VALUES('$first_name','$last_name','$name','$email','$password')";
	if ($password == $confirm_password && $password != '' && $name!='' && $email!='') {
		
	

	if (!mysqli_query($con,$sql))
	{

		echo 'Not inserted. Someone is using same Email id or Username.';

	}
	else{

		echo 'Signed Up Successfully';
	}

}else echo '<b>Error .Type again</b>';
	header("refresh:2; url=index.php");