<?php require APPROOT . '/views/includes/head.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <h1>leveringsinformatie</h1>

    <h3>naam leverancier: <?= $data["leveranciernaam"]; ?></h3> 
    <h3> contactpersoon: <?= $data["ContactPersoon"]; ?></h3> 
    <h3> LeverancierNummer: <?= $data["LeverancierNummer"]; ?></h3> 
    <h3> Telefoonnummer: <?= $data["Mobiel"]; ?></h3> 

   
  

    <table>
        <table border=1>
        <thead>
            <tr>
                <th>naam product</th>
                <th>datum  laaste  levering</th>
                <th>aantal</th>
                <th>eerstvolgede levering</th>
               
             

            </tr>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>
    
</body>
</html>