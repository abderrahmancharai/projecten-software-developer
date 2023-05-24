<?php
include("./connect_db.php");   

var_dump($_POST);

$kleintext = $_POST["kleintext"];
$hoodtext = $_POST["hoodtext"];
$img = $_POST ["img"];
$readmore = $_POST["readmore"];
$id = $_POST["id"];



$sql = "UPDATE `texttest`
                 SET `kleintext` = '$kleintext',
                        `hoodtext` = '$hoodtext',
                      `img` = '$img',
                      `readmore` = '$readmore'
                WHERE `id` = $id;";
//echo $sql;exit();
mysqli_query($conn,$sql); 
header("location: ./read.php");           

?>

