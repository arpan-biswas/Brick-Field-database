<!DOCTYPE html>
<html>
<style>
    body{
            margin:0px;
            border:0px;
        }
        #header{

            width: 100%;
            height: 120px;
            background:#99cc00;
            color:white;
            font-family: helvetica;
        }
        #main{

            width:150px;
            height:550px;
            background: #ff9933;
            float: left;
            font-family: helvetica;

        }
        #data{

            height:550px;
            background: #ccccff;
            color: black;
            font-family: helvetica;
            font-size: 15px;
            overflow: hidden;

        }
        #adminlogo{
            background: white;
            border-radius: 70px;
            height: 60px;


        }
        table {
        border-collapse: collapse;
        width: 100%;

}

        th, td {
        padding: 8px;
        text-align:center;
        border-bottom: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-top: 1px solid #ddd;
            }
        ul li{

            padding: 20px;
            border-bottom: 2px solid grey;
            color: #fbfbfb;

        }
        ul li:hover{

            background:#445963;
            color: #fff06e;
        }


</style>

<head><head> <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet"></head></head>
<body style="background-color: #00bfff">

<div id="header">
   
    <h2 style="font-size: 35px; color:  #FF1493; margin-left: 500px;font-family: verdana;padding-top: 10px;">Dhaka Urban Brick Field</h2>

</div>
<div id="main">

<br><br>
<form target="_blank" action="productorder_buyer.php" method="post" id="insertForm">
  

  <input type="submit" name="product order" value="Make New Order">
</form><br><br>
<form target="_self"  action="logout.php" method="post" id="productinfoform">
    <input type="submit" name="productsfromseller" value="Logout">
</form>
</div>

<div id="data">

<center><h3><font color="#00bcd4" style="color:#FF8C00;">PRODUCT INFORMATION</font></h3></center>


<?php
echo "<table style='border: solid 1px yellow;'>";
  echo "<tr><th>Id</th><th>Product Type</th><th>Size</th><th>Quantity</th><th>price</tr>";

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brick";

try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT id, type,size,quantity,price FROM product"); 
     $stmt->execute();

     // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
         echo $v;
     }
}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

?>


</div>


</body>
</html>