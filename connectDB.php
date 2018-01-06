 <?php
$host = "localhost";
    $user = "carttong_Carter";                     //Your Cloud 9 username
    $pass = "N)eptune747";                                  //Remember, there is NO password by default!
    $db = "carttong_Cars";                                  //Your database name you want to connect to
    $port = 21;                                //The port #. It is always 3306
    

$mysqli = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

if($mysqli){
    echo'Connected successfully to mySQL. <BR>';
}
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>