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
	$price = $_POST['price'];


	$sql = "INSERT INTO product(type,size,quantity,price) VALUES('$prodtype','$size','$quantity','$price')";
	if ($prodtype != '' && $size!='' && $quantity!='') {
		
	

	if (!mysqli_query($con,$sql))
	{

		echo 'Not inserted.....';

	}
	else{

		echo 'inserted Successfully';
	}

}else echo '<b>Error .Type again</b>';
	header("refresh:2; url=productinfohome_seller.php");