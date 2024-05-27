<?php
require "Connection.php";




$sqlshow="select * from info ";


$res= mysqli_query($connection, $sqlshow);


while ($row=mysqli_fetch_assoc($res)) {

 echo"<tr>";

echo "<td>".$row["Id"] ."</td>";
echo "<td>".$row["Title"] ."</td>";
echo "<td>".$row["Description"] ."</td>";
echo "<td><button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal'>Update</button>
<button type='button' class='btn btn-danger'>Delete</button></td>";




 echo"</tr>";







}






?>    