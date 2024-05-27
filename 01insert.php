
<?php


require "connection.php";

if (isset($_POST["usertitle"])) {
    
$usertitle=$_POST["usertitle"];
$userdesc=$_POST["userdesc"];


$sqlinsert="INSERT INTO `info`( `Title`, `Description`) VALUES ('$usertitle','$userdesc')";
$res=mysqli_query($connection,$sqlinsert );


if ($res) {

    header("location:index.php");
    echo"inserted";

}




}










?>