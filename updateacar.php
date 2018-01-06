<!DOCTYPE html>
<html>
    <head>
        <title>Update Car</title>
    </head>
<?php
    $vin = $_GET['VIN'];
    $Make = $_GET['Make'];
    $Model = $_GET['Model'];
    $Price = $_GET['Price'];
    $Photo = $_GET['Photo'];
?>
    <body>
        <h1>Sam's Used Cars</h1>
        
        <form action="updateCars.php" method="POST">
            VIN: <input name="VIN" type="text" value="<?php echo $vin ?>"><br><br>
            Make: <input name="Make" type="text" value="<?php echo $Make ?>"><br><br>
            Model: <input name="Model" type="text" value="<?php echo $Model ?>"><br><br>
            Price: <input name="ASKING_PRICE" type="text" value="<?php echo $Price ?>"><br><br>
            Photo: <input name="photo" type="text" value="<?php echo $Photo ?>"><br><br>
            <input name="Submit1" type="submit" value="submit"><br>
            &nbsp;
        
        </form>
    </body>
</html>