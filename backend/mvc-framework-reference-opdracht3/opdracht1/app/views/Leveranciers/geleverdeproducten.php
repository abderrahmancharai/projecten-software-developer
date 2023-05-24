<?php require APPROOT . '/views/includes/head.php'; ?>
<body>
<h1>geleverde producten</h1>
<h3>naam leverancier: <?= $data["leveranciernaam"]; ?></h3>
<h3>telefoonnummer: <?= $data["mobiel"]; ?></h3>
<h3>contactpersoon: <?= $data["contactpersoon"]; ?></h3> 
<h3>leveranciernummer: <?= $data["leveranciernummer"]; ?></h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">naam</th>
      <th scope="col">AantalAanwezig</th>
      <th scope="col">VerpakkingsEenheid</th>

      <th scope="col">laastelevering</th>
      <th scope="col">update</th>
     
   
    </tr>
  </thead>
  <tbody>
            <?= $data['rows']; ?>
        </tbody>
</table>
</body>
</html>
<?php require APPROOT . '/views/includes/footer.php'; ?>