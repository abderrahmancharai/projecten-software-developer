<?php require APPROOT . '/views/includes/head.php'; ?>
<body>
<h1>overzicht leverancier</h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Barcode</th>
      <th scope="col">naam</th>
      <th scope="col">VerpakkingsEenheid</th>
      <th scope="col">AantalAanwezig</th>
      <th scope="col">toonproducten</th>
    </tr>
  </thead>
  <tbody>
            <?= $data['rows']; ?>
        </tbody>
</table>
</body>
</html>