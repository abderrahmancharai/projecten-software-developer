<?php require APPROOT . '/views/includes/head.php'; ?>
<body>
<h1>geleverde producten</h1>
<h3>leverancier: <?= $data["leveranciernaam"]; ?></h3>
<h3>contactpersoon: <?= $data["contactpersoon"]; ?></h3> 
<h3>telefoonnummer: <?= $data["mobiel"]; ?></h3>

<form action="<?= URLROOT; ?>/Leveranciers/updategeleverdeproducten" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <label for="aantalproductheden">aantalproductheden</label>
                    <input type="number" name="aantalproductheden" id="aantalproductheden">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="DatumEerstVolgendeLevering">DatumEerstVolgendeLevering</label>
                    <input type="date" name="DatumEerstVolgendeLevering" id="DatumEerstVolgendeLevering">
                </td>
            </tr>
            <td>
          <input type="hidden" name="productId" value="<?= $data["productId"];?>">
        </td>
            <tr>
                <td>
                    <input type="submit" value="Verzenden">
                </td>
            </tr>

            <?php var_dump($data["productId"]);?>

</table>
</body>
</html>
<?php require APPROOT . '/views/includes/footer.php'; ?>




