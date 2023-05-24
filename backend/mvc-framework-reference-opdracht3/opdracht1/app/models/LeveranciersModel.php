<?php
class LeveranciersModel
{
    // Properties, fields
    private $db;
    public $helper;

    public function __construct()
    {
        $this->db = new Database();
    }

public function leveranciersinfo()
{
    $sql = "SELECT
	product.Id as productId,
    leverancier.naam,
    leverancier.ContactPersoon,
    leverancier.LeverancierNummer,
    leverancier.Mobiel,
    COUNT(DISTINCT product.naam) AS aantalverschilendeproducten
FROM
    leverancier
LEFT JOIN
    productperleverancier ON leverancier.Id = productperleverancier.LeverancierId
LEFT JOIN
    product ON productperleverancier.ProductId = product.Id
GROUP BY
    leverancier.Id
ORDER BY
    aantalverschilendeproducten DESC;

 ";
    $this->db->query($sql);
    $result = $this->db->resultSet();
    return $result;
}

public function geleverderproducten($productId)
{
    $sql = " select  product.Id as productId
    ,product.naam
    ,magazijn.AantalAanwezig
    ,magazijn.VerpakkingsEenheid
    ,MAX(productperleverancier.DatumLevering) as laastelevering
    
    
    
    from product
    inner join productperleverancier on	
    
    productperleverancier.ProductId =product.Id
    inner join magazijn on
    magazijn.ProductId = product.Id
    where product.Id =:productId
    GROUP BY product.Id";
    $this->db->query($sql);
    $this->db->bind(':productId', $productId, PDO::PARAM_INT);
    $result = $this->db->resultSet();
    return $result;
}


public function getleverancierbyid($productId)
{
    $sql = " select distinct  leverancier.naam
    ,leverancier.ContactPersoon
    ,leverancier.LeverancierNummer
    ,leverancier.Mobiel
        from product 
        inner join productperleverancier on
    product.Id =	productperleverancier.ProductId 
    inner join leverancier on
    leverancier.Id=productperleverancier.LeverancierId
where product.id = :productId
";
    $this->db->query($sql);
    $this->db->bind(':productId', $productId, PDO::PARAM_INT);
    $result = $this->db->single();
   
    return $result;
}

public function updategeleverderproducten($POST) : bool
{
    $isQuerySucces = false;

    try
    {
        $sql = "update product
        inner join magazijn on
        product.Id = magazijn.ProductId
        inner join productperleverancier on
        product.Id = productperleverancier.ProductId
        set
        magazijn.AantalAanwezig = IF(magazijn.AantalAanwezig IS NULL, :aantalproducthedenifitisnull, magazijn.AantalAanwezig + :aantalproducthedenifnotnull),
            productperleverancier.Aantal = :aantalverzonden,
            productperleverancier.DatumLevering = :DatumLevering
        where product.Id = :productId";
        $this->db->query($sql);
        
        
        $this->db->bind(':aantalproducthedenifnotnull', $POST["aantalproductheden"], PDO::PARAM_INT); 
        $this->db->bind(':aantalproducthedenifitisnull', $POST["aantalproductheden"], PDO::PARAM_INT); 
        $this->db->bind(':aantalverzonden', $POST["aantalproductheden"], PDO::PARAM_INT); 
        $this->db->bind(':DatumLevering', $POST["DatumEerstVolgendeLevering"], PDO::PARAM_INT);
        $this->db->bind(':productId', $POST["productId"], PDO::PARAM_INT);
        $this->db->execute(); 
        
        $isQuerySucces = true;

        $result =  $this->db->rowCount();
        var_dump($isQuerySucces);
        exit();
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    return $isQuerySucces;
   
}

            







}

