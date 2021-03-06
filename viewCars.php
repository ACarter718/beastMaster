<html>
<head>
    <meta charset="utf-8">
    <title>Sam's Used Cars</title>
<style>
  /* The grid is used to format a table instead of a grid control on the list of Notes */
#Grid
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:80%;
border-collapse:collapse;
margin-left: auto;
margin-right: auto;
}
#Grid td, #Grid th 
{
font-size:1em;
border:1px solid #61ADD7;
padding:3px 7px 2px 7px;
}
#Grid th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#C2D9FE;
color: lightslategray;

}
#Grid tr.odd td 
{
color:#000000;
background-color: #F2F5A9;
}

#Grid tr.even  
{
color:#000000;
background-color: white;
}
#Grid head 
{
color:#000000;
background-color:teal;
}

 </style>
   </head>

   
<body>
<h1>Sam's Used Cars</h1>
<h3>Complete Inventory</h3>



<?php 
include 'connectDB.php';
/*
if($dbSelect = $mysqli->select_db("carttong_Cars"){
    echo "Cars DB selected";
} else {
    echo "Problem accessing Cars DB <br>Error:<br>".$mysqli_error()."<br>";
} 
*/  
$query = "SELECT VIN, Make, Model, ASKING_PRICE, photo FROM `inventory` ORDER BY Make";






if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Error getting cars from the database: " . mysql_error()."<br>";
}

echo "<table id='Grid' style='width: 80%'><tr>";
echo "<th style='width: 50px'>Edit</th>";
echo "<th style='width: 50px'>Delete</th>";
echo "<th style='width: 50px'>Make</th>";
echo "<th style='width: 50px'>Model</th>";
echo "<th style='width: 50px'>Asking Price</th>";
echo "</tr>\n";

$class ="odd";

while ($result_ar = mysqli_fetch_assoc($result)) {
    echo "<tr class=\"$class\">";
    
   // echo "<td><a href='updateacar.php?VIN=".$result_ar['VIN']."'>Edit</a></td>";
    //echo "<td><a href='updateacar.php?VIN="$vin&Make=$make&Model=$model&Price=$price&Photo=$photo">"
    echo "<td><a href='updateacar.php?VIN=".$result_ar['VIN']."&Make=".$result_ar['Make']."&Model=".$result_ar['Model']."&Price=".$result_ar['ASKING_PRICE']."&Photo=".$result_ar['photo']."   '>Edit</a></td>";
    echo "<td><a href='deleteCar.php?VIN=".$result_ar['VIN']."'>Delete</a></td>";
    echo "<td><a href='viewCar.php?VIN=".$result_ar['VIN']."'>" . $result_ar['Make'] . "</a></td>";
    echo "<td>" . $result_ar['Model'] . "</td>";
    echo "<td>" . $result_ar['ASKING_PRICE'] . "</td>";
   echo "</td></tr>\n";
    if ($class=="odd"){
        $class="even";
    }
    else
    {
        $class="odd";
    }
}

echo "</table>";
echo ($result_ar."<br>");

$mysqli->close();

?>


 </body>
 
</html>