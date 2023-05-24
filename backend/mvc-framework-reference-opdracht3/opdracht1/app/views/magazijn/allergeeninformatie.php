<?php require APPROOT . '/views/includes/head.php'; ?>

<body>

   
    <h1>overzicht allergien</h1>
    <h4> product: <?= $data["productnaam"]; ?></h4> 
    <h4> barcode: <?= $data["barcode"]; ?></h4> 
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">allergeennaam</th>
      <th scope="col">Omschrijving</th>
  
   
    </tr>
  </thead>
  <tbody>
            <?= $data['rows']; ?>
        </tbody>
</table>

    
</body>
</html>