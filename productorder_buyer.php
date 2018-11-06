<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>product Info</title>
		<link href="css/style2.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
<body style="background-color: #ffffcc">
	<div class="main" style="background-color: #ff6600">
		<div class="header" style="background-color: #00ff99" >
			<h1 style="font-size: 50px; color: #008B8B;">Dhaka Urban Brick Field</h1>
			<p style="font-size: 25px;">PRODUCT ORDER</p>
		</div>
			<form action="productinfoinsert_buyer.php" method="post" id="insertForm">
				<ul class="left-form">
					<h2 style="font-size: 30px; color: #FF8C00;">Enter Product</h2>
					<li>
						<input type="text"   placeholder="Product Type" name="pt" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="Size of the brick(IN NUMBER)" name="size" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="Quantity (IN NUMBER)" name="quantity" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text" placeholder="Mobile no.(e.g. 01711111111111)" name="mob">
					</li>
						<p><input type="submit" name="submit" id="Save" value="ORDER"></p>
				</ul>
			</form>
			</div>

	
</body>
</html>