<!DOCTYPE html>
<html>
    <head>
        <title>Car Saved</title>
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        
<?php
    //Capture the values posted to this php program from the text fields
    $VIN = trim($_REQUEST['VIN']);
    $Make = trim($_REQUEST['Make']);
    $Model = trim($_REQUEST['Model']);
    $Price = trim($_REQUEST['Asking_Price']);
    
    //Build a SQL Query using the values from above
    $query="INSERT INTO `inventory`(VIN,Make,Model,ASKING_PRICE)
    VALUES (
        '$VIN',
        '$Make',
        '$Model',
        '$Price'
    )";
    
    //Print the query to the browswer so you can see it
    echo ($query."<br>");
    include 'connectDB.php';
    //echo 'Connected successfully to mySQL. <br>';
    
    //Select a database to work with
    $mysqli->select_db("Cars");
    echo ("Selected the Cars database. <br>");
    
    //Try to insert the new car into the database
    if($result = $mysqli->query($query)){
        echo "<p>You have successfully entered $Make $Model into the database.</p>";
    }
    else {
        echo "Error enetering $VIN into database: ".$mysqli->error."<br>";
    }
    $mysqli->close();
    
//include 'footer.php'    
?>
    </body>
</html>