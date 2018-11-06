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
            background: #99cc00;
            color:white;
            font-family: helvetica;
        }
        #main{

            width:120px;
            height:550px;
            background:#ff9933;
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
        text-align: left;
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
    
<center><h1>Welcome To Admin Panel</h1></center>
</div>

<div id="main">


<br><br><form target="_blank" action="admininfo_seller.php" method="post" id="insertForm">
  

  <input type="submit" name="" value="All Admin">
</form><br><br>
<form target="_blank"  action="addadmin.php" method="post" id="productinfoform">
      <input type="submit" name="productsfromseller" value="Add admin">
</form><br><br>
<form target="_blank"  action="productinfohome_seller.php" method="post" id="insertForm">
  

  <input type="submit" name="product info" value="Insert Product">
</form>

<br><br>
<form target="_blank"  action="ordersfrombuyer_seller.php" method="post" id="insertForm">
    
    <input type="submit" name="productorderdbybuyer" value="All Orders">
</form>
<br><br>
<form target="_blank"  action="employeeinfo_seller.php" method="post" id="employeeinfoseller">
    
    <input type="submit" name="EmployeeFromSeller" value="All Employee">
</form>

<br><br>
    <form target="_blank"  action="employeelogin.php" method="post" id="employeeinfoseller">
    
    <input type="submit" name="EmployeeFromSeller" value="Insert Employee">
</form>

<br><br>
<form target="_blank"  action="productinfo_seller.php" method="post" id="productinfoform">
    
    <input type="submit" name="productsfromseller" value="In Stocks">
</form><br><br>
<form target="_self"  action="logout.php" method="post" id="productinfoform">
    <input type="submit" name="productsfromseller" value="Logout">
</form>


</div>

<div id="data">

<center><h3><font color="#00bcd4">ORDERS INFORMATION</font></h3></center>



<?php 
    error_reporting(0);
    include 'connection.php';
    $id = $_POST['id'];


    $sql = "DELETE FROM productorder where id = $id";

    if ($_POST['submit']) {
        if (mysqli_query($conn,$sql)) {

            echo "Deleted Successfully";
        }
        else
        {
            echo "Something went wrong";
        }
    }

    ?>



</head>
<body>
<p>insert id number to delete</p>
<form action="ordersfrombuyer_seller.php" method="POST">
    ID: <input type="text" name="id" required>
    <input type="submit" name="submit" value="Delete">
</form>
<br><br>








<?php
echo "<table style='border: solid 1px black;'>";
  echo "<tr><th>Id</th><th>Product Type</th><th>Size</th><th>Quantity</th><th>mobile No.</tr>";

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
     $stmt = $conn->prepare("SELECT id, type,size,quantity,mobile FROM productorder"); 
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