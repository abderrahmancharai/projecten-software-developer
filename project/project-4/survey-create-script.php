<?php
include("./functions.php");
include("./connect_db.php");

var_dump($_POST);
$vraag1 = $_POST["vraag1"];
$vraag2 = $_POST["vraag2"];
$vraag3 = $_POST["vraag3"];
$vraag4 = $_POST["vraag4"];
$vraag5 = $_POST["vraag5"];
//echo "mijn voleddige naam is: " . $_POST["firstname"] . " " . $_POST["subject"] . " " . $_POST["lastname"]. " " . $_POST["email"]. "jaar oud". $_POST["woonplaats"];

echo "<hr>";
//  hier worden de gegevens die nodig voor verbinding met de 



 // PDO query prepared
 
if($result){
    header("refresh:0.1; url=./index.php?content=message&alert=message-succes");  
}
else{
    header("refresh:0.1; url=./index.php?content=message&alert=message-error");
}

?>

