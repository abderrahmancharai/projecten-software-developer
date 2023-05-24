<?php
include("./connect_db.php");   

var_dump($_POST);

$email = $_POST["email"];

$id = $_POST["id"];



$sql = "UPDATE `register`
                 SET `email` = '$email'
                       
                      
                WHERE `id` = $id;";
mysqli_query($conn,$sql); 
echo $sql;exit();

//header("location: ./gebruikers.php");           

?>

