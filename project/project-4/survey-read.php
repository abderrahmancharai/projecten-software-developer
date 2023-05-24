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
      <h1>Hier zie je andere mensen mening. </h1>
  <div class="read"><a href="index.php">read</a></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
<table border=1 id="table_detail " cellpadding=10>
 
    <thead>
        <tr>
        <th>id</th>
            <th>Vraag1</th>
            <th>Vraag2</th>
            <th>Vraag3</th>
            <th>Vraag4</th>
            <th>Vraag5</th>
            <th>update</th>
            <th>delete</th>
        </tr>

    </thead>

    <tbody>
    <?php
include("connect_db.php");

$sql = "SELECT * FROM `enquete-veranderen`";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['vraag1'] . "</td>";
    echo "<td>" . $row['vraag2'] . "</td>";
    echo "<td>" . $row['vraag3'] . "</td>";
    echo "<td>" . $row['vraag4'] . "</td>";
    echo "<td>" . $row['vraag5'] . "</td>";
    echo "<td><a href='survey-update.php?id=" . $row['id'] . "'>update</a></td>";
    echo "<td><a href='survey-delete.php?id=" . $row['id'] . "'>delete</a></td>";
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