<?php

include("./connect_db.php");   

$id = $_GET["id"];

$sql="DELETE FROM `texttest` WHERE `id` = $id";
mysqli_query($conn,$sql); 
header("location: ./read.php");           


?>