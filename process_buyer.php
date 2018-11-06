<?php 

	$name = $_POST['username'];
	$pass = ($_POST['password']);


	$name = stripcslashes($name);
	$pass = stripcslashes($pass);
	$name = mysql_real_escape_string($name);
	$pass = mysql_real_escape_string($pass);

	mysql_connect('localhost','root','');
	mysql_select_db('brick');

	$result = mysql_query("select * from buyer_signup where password = '$pass' and username = '$name'") or die("Failed to query database ".mysql_error());

	$row = mysql_fetch_array($result);
	if ($name!='' || $pass!='') {
	
	if($row['username']==$name && $row['password']==$pass){

     header('Location: homepage_buyer.php'); 


	}
	else if($row['username']!=$name || $row['password']!=$pass){

		echo "username or password is incorrect!!!";
	}
	else{

		echo "Failed to log In";
	}
	}
	else
	{
		echo 'Username or Password is empty';
	}
		header("refresh:2; url=index.php");
	

?>

