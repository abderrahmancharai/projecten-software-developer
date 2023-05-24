<?php

var_dump($_POST);
include 'connect_db.php';

$rating = $_POST['rating'];

$hoezo_mboutrecht = $_POST['hoezo-mboutrecht'];

$lokaal_te_vinden = $_POST['lokaal-te-vinden'];

$voornaam = $_POST['voornaam'];

$achternaam = $_POST['achternaam'];

$sql = "INSERT INTO enquete (rating, waarommbou, lokaaltevinden, voornaam, achternaam) VALUES ('$rating', '$hoezo_mboutrecht', '$lokaal_te_vinden', '$voornaam', '$achternaam')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Refresh: 3; URL=index.php?content=home');
