<?php


$servername = "localhost";
$username = "carttong_Carter";
$password = "N)eptune747";
$dbname = "carttong_Kings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 




if($conn)
{
	echo "connection is established!!!";
}
else {
	echo "error in connection";
}

?>