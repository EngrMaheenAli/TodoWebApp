
<?php
$server="localhost";
$username="root";
$pass="";
$db="churail";



$connection= mysqli_connect($server, $username, $pass, $db);


if (!$connection) {
    die("connection is failed".mysqli_connect_error());
}



?>