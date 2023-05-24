<?php
include("./connect_db.php");


var_dump($_POST);

$vraag1 = $_POST["vraag1"];
$vraag2 = $_POST["vraag2"];
$vraag3 = $_POST["vraag3"];
$vraag4 = $_POST["vraag4"];
$vraag5 = $_POST["vraag5"];

$id = $_POST["id"];



$sql = "UPDATE `enquete-veranderen`
                 SET vraag1 = '$vraag1',
                     vraag2 = '$vraag2',
                     vraag3 = '$vraag3',
                     vraag4 = '$vraag4',
                     vraag5 = '$vraag5'
                 WHERE id = '$id'";


    header("refresh:0.1; url=./index.php?content=message&alert=message-succes");  


?>