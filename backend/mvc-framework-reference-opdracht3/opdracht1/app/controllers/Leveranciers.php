<?php

class Leveranciers extends Controller
{
    // Properties, field
    private $LeveranciersModel;

    // Dit is de constructor
    public function __construct()
    {
        $this->LeveranciersModel = $this->model('LeveranciersModel'); // Model initialisatie
    }
    public function index()
    {
        $leveranciersinfo = $this->LeveranciersModel->leveranciersinfo();
        $rows = '';



        foreach ($leveranciersinfo as $value) {


            $rows .= "<tr>
                        <td>$value->ContactPersoon</td>
                        <td>$value->LeverancierNummer</td>  
                        <td>$value->Mobiel</td>
                        <td>$value->aantalverschilendeproducten</td>
                        <td><a href='" . URLROOT . "/Leveranciers/geleverdeproducten/$value->productId'><i class='bx bx-x'></i></i></a></td>
                      </tr>";
        }

        $data = [
            'title' => 'magazijn in dienst',
            'amountOfmagazijn' => sizeof($leveranciersinfo),
            'rows' => $rows
        ];


        $this->view('Leveranciers/index', $data); // Bestellingen ophalen via model
    }

    public function geleverdeproducten($productId = 0)
    {
        if ($productId == 0) {
            echo "dit bedrijf heeft geen producten geleverd aan jamin";
            header("Refresh: 4; URL=" . URLROOT . "/Leveranciers/index");

        } else {

            if (empty($productId)) {
                $rows = "dit bedrijf heeft geen producten geleverd aan jamin</td></tr>";
                header("Refresh: 4; url=" . URLROOT . "/Leveranciers/index");
            } else {



                $geleverdeproducten = $this->LeveranciersModel->geleverderproducten($productId);
                $leveranciernaam = $this->LeveranciersModel-> getleverancierbyid($productId);


                {
    $rows = '';




    foreach ($geleverdeproducten as $value) {


        $rows .= "<tr>
                        <td>$value->naam</td>
                        <td>$value->AantalAanwezig</td>  
                        <td>$value->VerpakkingsEenheid</td>
                        <td>$value->laastelevering</td>
                        <td><a href='" . URLROOT . "/Leveranciers/updategeleverdeproducten/$value->productId'><i class='bx bx-plus-circle'></i></i></i></a></td>
                        
                      </tr>";
    }
}

                    $data = [
                        'title' => 'magazijn in dienst',
                        'amountOfmagazijn' => sizeof($geleverdeproducten),
                        'rows' => $rows,
                         'leveranciernaam' => $leveranciernaam->naam,
                         'contactpersoon' => $leveranciernaam->ContactPersoon,
                            'leveranciernummer' => $leveranciernaam->LeverancierNummer,
                            'mobiel' => $leveranciernaam->Mobiel,
                    ];


                    $this->view('Leveranciers/geleverdeproducten', $data); // Bestellingen ophalen via model
                }
            }
        }

        public function updategeleverdeproducten($productId = 0)
        {

            
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    
           
                    $this->LeveranciersModel->updategeleverderproducten($POST);
                  $productid = ($POST["productId"]);

                  var_dump($productid);
                
                  
                  $leveranciernaam = $this->LeveranciersModel->getleverancierbyid($productId);

                  var_dump($leveranciernaam);

                    header("Refresh: 1000; URL=" . URLROOT . "/Leveranciers/geleverdeproducten/$productid");
                    echo "het product is toegevoegd aan de magazijn";
                    
              
                    exit;

                 

                  
            
                                   
                  
                   
                   
                


                    
                    
                } 
            else{
            $leveranciernaam = $this->LeveranciersModel-> getleverancierbyid($productId);




    $data = [
        'title' => 'magazijn in dienst',

         'leveranciernaam' => $leveranciernaam->naam,
         'contactpersoon' => $leveranciernaam->ContactPersoon,
            'leveranciernummer' => $leveranciernaam->LeverancierNummer,
            'mobiel' => $leveranciernaam->Mobiel,
            'productId' => $productId,
    ];
}
                        $this->view('Leveranciers/updategeleverdeproducten',$data ); // Bestellingen ophalen via model
                    }
                }
            
    
