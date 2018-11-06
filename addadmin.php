
<!DOCTYPE html>
<html>
<head>


		<meta charset="utf-8">
		<title>Login or Sign Up page</title>
		<link href="css/style2.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
<body style="background-color: #ffffcc">
	<div class="main" style="background-color: #ff6600">
		<div class="header" style="background-color: #00ff99">
			<h1 style="font-size: 50px; color: #008B8B;">Dhaka Urban Brick Field</h1>
			<p style="font-size: 25px;">Make A Bridge Between Seller & Buyer</p>
		</div>
			<form target="_blank" action="insert_seller.php" method="post" id="insertForm">
				<ul class="left-form">
					<h1 style="font-size: 30px; color: #FF8C00;"></br>Add New Admin:</h1>
					<li>
						<input type="text"   placeholder="First Name" name="fn" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="Last Name" name="ln" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="Username" name="username" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="Email" name="email" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"   placeholder="password" name="pass" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"   placeholder="Confirm Password" name="conpass" required/>
						<div class="clear"> </div>
					</li>
						<p><input type="submit" name="submit" id="Sign_Up" value="Add Admin"></p>
				</ul>
			</form>
			</div>
			
			
				

	
</body>
</html>