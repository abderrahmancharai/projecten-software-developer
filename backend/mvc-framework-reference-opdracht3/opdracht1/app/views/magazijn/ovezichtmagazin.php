<?php require APPROOT . '/views/includes/head.php'; ?>

</head>
<body>
    <h1>leveringsinformatie</h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Barcode</th>
      <th scope="col">naam</th>
      <th scope="col">VerpakkingsEenheid</th>
      <th scope="col">AantalAanwezig</th>
      <th scope="col">allergeeninformatie</th>
      <th scope="col">leveratinfo</th>
   
    </tr>
  </thead>
  <tbody>
            <?= $data['rows']; ?>
        </tbody>
</table>

    
</body>
</html>