<?php
class magazijnModel
{
  // Properties, fields
  private $db;
  public $helper;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function ovezichtmagazininformatie()
  {
    $sql = "select  
      product.Id,
        product.Barcode,
        product.naam,
      magazijn.VerpakkingsEenheid,
      magazijn.AantalAanwezig
      from product 
      inner join magazijn on
      magazijn.ProductId =product.Id order by Barcode asc";
    $this->db->query($sql);
    $result = $this->db->resultSet();
    return $result;
  }

  public function getleveringsinformatiebyid($productId)
  {
    $sql = "select 	product.Naam,
      leverancier.Naam as leveranciernaam	,
      leverancier.ContactPersoon,
      leverancier.LeverancierNummer,
      leverancier.Mobiel,
      productperleverancier.DatumLevering,
      productperleverancier.DatumEerstVolgendeLevering,
      magazijn.AantalAanwezig,
      productperleverancier.DatumEerstVolgendeLevering
      from product
      
      inner join magazijn on    
      magazijn.ProductId = product.Id

      inner join productperleverancier on
    
      productperleverancier.ProductId =product.Id
      
      inner join leverancier on
      leverancier.Id = productperleverancier.LeverancierId   where product.Id = :productId";
    $this->db->query($sql);
    $this->db->bind(':productId', $productId, PDO::PARAM_INT);
    $result = $this->db->resultSet();
    return $result;
  }


  public function getlallergeeninformatiebyid($productId,)
  {
    $sql = "select  product.Naam as productnaam,
      product.barcode,
          productallergenen.ProductId,
          allergeen.Naam as allergeennaam,
          allergeen.Omschrijving
          from product
          inner join productallergenen on
         productallergenen.ProductId =product.Id
         inner join allergeen on
         productallergenen.Id =allergeen.Id
         where product.Id = :productId";
    $this->db->query($sql);
    $this->db->bind(':productId', $productId, PDO::PARAM_INT);
    $result = $this->db->resultSet();
    return $result;
  }


  public function getProductNaamBarcode($productId)
  {
    $sql = "select  Naam as productnaam
		        ,Barcode 
        from product where id = :productId";
    $this->db->query($sql);
    $this->db->bind(':productId', $productId, PDO::PARAM_INT);
    $result = $this->db->single();
    return $result;
  }

}
