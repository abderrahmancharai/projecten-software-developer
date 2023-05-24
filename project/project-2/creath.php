<?php
// var_dump($_POST);
include("connect_db.php");$sql = "select * from`texttest`"; 
$result= mysqli_query($conn,$sql);



include("./function.php");

//  hier worden de gegevens die nodig voor verbinding met de 

echo $_POST["kleintext"];
$kleintext = sanitize($_POST["kleintext"]);
$hoodtext =sanitize($_POST["hoodtext"]);
$img =sanitize($_POST["img"]);
$readmore =sanitize($_POST["readmore"]);
echo "mijn voleddige naam is: " . $_POST["kleintext"] . " " . $_POST["hoodtext"]. " " . $_POST["img"]. " " . $_POST["readmore"] ;

 $sql ="INSERT INTO `texttest` (id, kleintext, hoodtext, img,readmore) VALUES (NULL, ?, ?,?,?);";
//  $sql= "INSERT INTO `contact` (`firstname`, `lastname`, `email`, `subject` ) 
//  VALUES ('$firstname', '$lastname', '$email', '$subject');";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo "stmt failed";
    die();
}

$stmt->bind_param('ssss', $kleintext, $hoodtext,$img,$readmore);

$result = $stmt->execute();

if($result){
    header("location: ./news.php");  
}

?>