<!DOCTYPE  html>
<html>
<head><title>Update Cars</title></head>
<h1>Update a Car</h1>
<?php
//capture the values posted to this php program from the text fields
$VIN = trim($_REQUEST['VIN']);
$Make = trim($_REQUEST['Make']);
$Model = trim($_REQUEST['Model']);
$Price = trim($_REQUEST['ASKING_PRICE']);
$Photo = trim($_REQUEST['photo']);

//Build a query
//$query="UPDATE `inventory` SET `VIN`=['$VIN'],`Make`=['$Make'],`Model`=['$Model'],`ASKING_PRICE`=['$Price'] WHERE VIN= '$VIN'";
$query="UPDATE `inventory` SET `VIN`='$VIN',`Make`='$Make',`Model`='$Model',`ASKING_PRICE`='$Price', `photo`='$Photo' WHERE VIN= '$VIN'";

echo ($query."<br>");
include 'connectDB.php';
$mysqli->select_db('carttong_Cars');
echo('Selected Cars database <br>');

if($result = $mysqli->query($query)){
    echo('<p>Update successful</p>');
}
else {
    echo("Error updating record: <br>".$msqli->error."<br>");
}
$mysqli->close();


?>

<p><a href="viewCars.php">View Cars</a></p>
</body>
</html>