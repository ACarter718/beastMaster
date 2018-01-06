<!DOCTYPE html>
<html>
    <head>
        <title>Delete Car</title>
        <h1>Delete a Car from Inventory?</h1>
    </head>
    <body>
<?php
    $vin = $_GET['VIN'];

    echo "Are you sure you want to delete $vin from the inventory?";
    echo "<a href='deleteConfirmation.php?VIN=$vin'>Yes</a>";
    echo "<a href='viewCars.php'>No</a>";
?>
        
    </body>
</html>