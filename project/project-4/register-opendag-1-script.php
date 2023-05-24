<?php
session_start();
include("./connect_db.php");
$id = $_SESSION["id"];
var_dump($_POST);

// $kleintext = $_POST["kleintext"];
// $hoodtext = $_POST["hoodtext"];
// $img = $_POST ["img"];
// $readmore = $_POST["readmore"];
// $id = $_POST["id"];



$sql = "UPDATE `register_newgebruiker`
                 SET `opendag` = 1
                       
                 WHERE `id` = $id";
// echo $sql;exit();
mysqli_query($conn, $sql);
//header("location: index.php?content=home");    

if (mysqli_query($conn, $sql)) {
    $id = mysqli_insert_id($conn);

    $to = $email;
    $subject = "Activatielink voor uw account van voetbal.nl";
    $message = '<!doctype html>
    <html lang="en">
        <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
        body {
            background-color: #dddddd;
            font-size: 1.3em; 
        }
        </style>
    
        <title>Hello, world!</title>
        </head>
        <body>
        <h3></h3>
        <h2>Beste Gebruiker,</h2>
        <p>U heeft zich onlangs geregistreerd voor de MBOUtrecht opendag software developer & Expert IT systems and devices</p>
        <p> Opendag begint om 14:00 in lokaal 3.28, als u wilt weten hoe je daar komt kan je het bij onze website opzoeken of bij de ingang kan je het ook zien.</p>
        <p>Met vriendelijke groet,</p>
        <p>MBOUtrecht</p>
       
    

        


    
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        --> 
        </body>
    </html>';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: admin@voetbal.org\r\n";
    $headers .= "Cc:moderator@voetbal.org\r\n";
    $headers .= "BCc:root@voetbal.org";

    mail($to, $subject, $message, $headers);
    header("Refresh:0.1; url=./index.php?content=message&alert=opendag-success");
} else {
    header("Location:./index.php?content=message&alert=register-error");
}
