<!DOCTYPE html>
<html>
    <head>
<?php
    $vin = $_GET['VIN'];
    $query = "DELETE FROM `inventory` WHERE VIN='$vin'";
    include 'connectDB.php';
    
?>
        <title>Delete Car</title>
        
        
    </head>
    <body>
<?php
    if($result = $mysqli->query($query)){
        echo '<h1>Car Successfully Deleted</h1';
    } else {
        echo ("<h1>Oops! There was a problem</h1> Error: <br>".$mysqli.error."<br>");
    }
?>
      <p><a href="viewCars.php">View Cars</a></p>  
    </body>
</html>