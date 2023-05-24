<?php
// var_dump($_POST);
echo $_POST["firstname"];
$firstname = $_POST["firstname"];
$subject = $_POST["subject"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
//echo "mijn voleddige naam is: " . $_POST["firstname"] . " " . $_POST["subject"] . " " . $_POST["lastname"]. " " . $_POST["email"]. "jaar oud". $_POST["woonplaats"];

echo "<hr>";
//  hier worden de gegevens die nodig voor verbinding met de 
$dbserver = "localhost";
$dbuser = "root";
$password = "";
$dbname = "utrechtpizzacontact";

$conn = mysqli_connect($dbserver, $dbuser, $password, $dbname);


// $sql ="INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `age`,`woonplaats`,`gender`)
//          VALUES (NULL, '$firstname', '$infix', '$lastname', '$age','$woonplaats','$gender');";
 $sql= "INSERT INTO `contact` (`firstname`, `lastname`, `email`, `subject` ) 
 VALUES ('$firstname', '$lastname', '$email', '$subject');";
$result = mysqli_query($conn,$sql);

if($result){
    header("Location: index.php");  
}

?>