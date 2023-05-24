<?php

class magazijn extends Controller
{
    // Properties, field
    private $magazijnModel;

    // Dit is de constructor
    public function __construct()
    {
        $this->magazijnModel = $this->model('magazijnModel'); // Model initialisatie
    }
    // Index-methode om de bestellingen weer te geven
    public function index()
    {

        $this->view('magazijn/index'); // Bestellingen ophalen via model
    }

    public function ovezichtmagazin()
    {
        
        $magazijn = $this->magazijnModel->ovezichtmagazininformatie();
        $rows = '';



        foreach ($magazijn as $value) {
            $magazijnId = $value->Id;

            $rows .= "<tr>
                        <td>$value->Barcode</td>
                        <td>$value->naam</td>
                        <td>$value->VerpakkingsEenheid</td>
                        <td>$value->AantalAanwezig</td>
                        <td><a href='" . URLROOT . "/magazijn/allergeeninformatie/$magazijnId'><i class='bx bx-x'></i></i></a></td>
                        <td><a href='" . URLROOT . "/magazijn/leveringsinformatie/$magazijnId'><i class='bx bx-question-mark'></i></i></a></td>
                      </tr>";
        }

        $data = [
            'title' => 'magazijn in dienst',
            'amountOfmagazijn' => sizeof($magazijn),
            'rows' => $rows
        ];


        $this->view('magazijn/ovezichtmagazin', $data); // Bestellingen ophalen via model
    }


    public function leveringsinformatie($productId)
    {
        $magazijn = $this->magazijnModel->getleveringsinformatiebyid($productId);
        $rows = '';
        foreach ($magazijn as $value) {
          
            $magazijnaantal = $value->AantalAanwezig;
            var_dump($magazijnaantal);
            $DatumEerstVolgendeLevering = $value->DatumEerstVolgendeLevering;
            if (empty($magazijnaantal)) {
                $rows = "<tr><td colspan='5'>Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is : $DatumEerstVolgendeLevering </td></tr>";
                header("Refresh: 4; url=" . URLROOT . "/magazijn/ovezichtmagazin");
            } else {



                $rows .= "<tr>
                        <td>$value->Naam</td>
                        <td>$value->DatumLevering</td>
                        <td>$value->AantalAanwezig</td>
                        <td>$value->DatumEerstVolgendeLevering</td>
                       
                        
                     
                      </tr>";
            }

            $data = [
                'title' => 'magazijn in dienst',
                'amountOfmagazijn' => sizeof($magazijn),
                'rows' => $rows,
                'leveranciernaam' => $value->leveranciernaam,
                'ContactPersoon' => $value->ContactPersoon,
                'LeverancierNummer' => $value->LeverancierNummer,
                'Mobiel' => $value->Mobiel,


            ];


            $this->view('magazijn/leveringsinformatie', $data); // Bestellingen ophalen via model
        }
    }

    public function allergeeninformatie($productId)

    {
        $productInfo = $this->magazijnModel->getProductNaamBarcode($productId);
        $allergeeninformatie = $this->magazijnModel->getlallergeeninformatiebyid($productId);



        if (empty($allergeeninformatie)) {
            $rows = "<tr><td colspan='2' style='textalign: center'>Er is geen allergeen informatie beschikbaar voor dit product</td></tr>";
            header("Refresh: 6; url=" . URLROOT . "/magazijn/ovezichtmagazin");
        } else {
            $rows = '';
            foreach ($allergeeninformatie as $value) {


                $rows .= "<tr>
                
        
                <td>$value->allergeennaam</td>
                <td>$value->Omschrijving</td>
            </tr>";
            }
        }


        $data = [
            'title' => 'magazijn in dienst',
            'rows' => $rows,
            'productnaam' => $productInfo->productnaam,
            'barcode' => $productInfo->Barcode,
        ];


        $this->view('magazijn/allergeeninformatie', $data); // Bestellingen ophalen via model

    }
}
