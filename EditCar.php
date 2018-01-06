<html>
<head>
<title>Car Saved</title>
</head>
<body bgcolor="#FFFFFF" text="#000000" >

<?php
// Capture the values posted to this php program from the text fields in the form



$VIN = trim($_REQUEST['VIN']);
$Make = trim($_REQUEST['Make']);
$Model = trim($_REQUEST['Model']);
$Price = trim($_REQUEST['ASKING_PRICE']);

//Build a SQL Query using the values from above



$query="UPDATE `inventory` SET `VIN`='$VIN',`Make`='$Make',`Model`='$Model',`ASKING_PRICE`='$Price' WHERE VIN= '$VIN'";

// Print the query to the browser so you can see it

echo ($query."<br>");

include 'connectDB.php';

//select a database to work with
$mysqli->select_db('Cars');
 Echo ("Selected the Cars database. <br>");

/* Try to insert the new car into the database */
if($result = $mysqli->query($query)){
 echo "<p>You have successfully entered $Make $Model into the database.</P>";
}
else
{
 echo "Error entering $VIN into database: " . mysql_error()."<br>";
}
$mysqli->close();
?>
<p><a href="viewCars.php">View Cars with Edit Links</a></p>
</body>
</html>