<?php
include("./connect.php");   

var_dump($_POST);

$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST ["lastname"];
$woonplaats = $_POST["woonplaats"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$id = $_POST["id"];


$sql = "UPDATE `users`
                 SET `firstname` = '$firstname',
                        `infix` = '$infix',
                     `lastname` = '$lastname', 
                     `woonplaats` = '$woonplaats',
                      `gender` = '$gender',
                      `age` = $age
                WHERE `id` = $id;";
//echo $sql;exit();
mysqli_query($conn,$sql); 
header("location: ./read.php");           

?>

