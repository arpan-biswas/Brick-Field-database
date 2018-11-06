<?php 
	
	$con = mysqli_connect('localhost','root','');

	if(!$con)
	{
		echo 'Not Connected to server';

	}

	if(!mysqli_select_db($con,'brick')){
		echo 'datbase is not selecting'	;
	}

	$prodtype = $_POST['pt'];
	$size = $_POST['size'];
	$quantity = $_POST['quantity'];
	$mobile = $_POST['mob'];


	$sql = "INSERT INTO productorder(type,size,quantity,mobile) VALUES('$prodtype','$size','$quantity','$mobile')";
	if ($prodtype != '' && $size!='' && $quantity!='' && $mobile!='') {
		
	

	if (!mysqli_query($con,$sql))
	{

		echo 'Not inserted.....';

	}
	else{

		echo 'inserted Successfully';
	}

}else echo '<b>Error .Type again</b>';
	header("refresh:2; url=productorder_buyer.php");