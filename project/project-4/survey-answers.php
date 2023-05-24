<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylerefrensie.css">
    <title>read</title>
  </head>
  <body>

  <h1>Referenties</h1>
      <h1>Hier zie je ingevulde enquetes. </h1>
  <div class="read"><a href="index.php">read</a></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
<table border=1 id="table_detail " cellpadding=10>
 
    <thead>
        <tr>
        <th>Rating</th>
            <th>Waarom Mbo Utrecht</th>
            <th>Is de lokaal te vinden?</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
        </tr>

    </thead>

    <tbody>
    <?php

include("connect_db.php");


$sql = "SELECT * FROM `enquete`";




$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['rating'] . "</td>";
    echo "<td>" . $row['waarommbou'] . "</td>";
    echo "<td>" . $row['lokaaltevinden'] . "</td>";
    echo "<td>" . $row['voornaam'] . "</td>";
    echo "<td>" . $row['achternaam'] . "</td>";
    echo "</tr>";
}

?> 
    </tbody>


</table>

       </div>
        </div>

    </div>




  </body>
</html>