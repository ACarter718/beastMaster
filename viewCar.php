<html>
<head>
<title>Sam's Used Cars</title>
</head>

<body background="bg.jpg">

<h1>Sam's Used Cars</h1>
<?php include 'connectDB.php';
$vin = $_GET['VIN'];
$query = "SELECT * FROM inventory WHERE VIN='$vin'";
/* Try to query the database. Here, $result is a new variable
that gets initialized with the query results. If the connection is successful
and the query is successful, $result gets assigned and returns TRUE because it's not NULL*/
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysql_error()."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $year = $result_ar['YEAR'];
	$make = $result_ar['Make'];
    $model = $result_ar['Model'];
    $trim = $result_ar['TRIM'];
    $color = $result_ar['EXT_COLOR'];
    $interior = $result_ar['INT_COLOR'];
    $mileage = $result_ar['MILEAGE']; 
    $transmission = $result_ar['TRANSMISSION']; 
    $price = $result_ar['ASKING_PRICE'];
    $photo = $result_ar['photo'];
}
echo "$year $make $model </p>";
echo "<p>Asking Price: $price </p>";
echo "<p>Exterior Color: $color </p>";
echo "<p>Interior Color: $interior </p>";
echo "<p><img src='images/$photo' height=50%></p>";

$mysqli->close();
 
   
?>
<p><a href="updateacar.php?VIN=$vin&Make=$make&Model=$model&Price=$price&Photo=$photo">Edit this Car</a></p>
<p><a href="viewCars.php">Back to Inventory</a></p>

</body>

</html>
