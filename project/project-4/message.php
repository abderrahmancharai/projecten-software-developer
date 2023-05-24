<link rel="stylesheet" href="css/message.css">
<?php
$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
$id = (isset($_GET["id"]))? $_GET["id"]: "";
$pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
$email = (isset($_GET["email"]))? $_GET["email"]: "";


switch($alert){
    case"no-email":
        echo'<div class="alert">
        <span class="closebtn"">&times;</span> 
        <strong>Danger!</strong> niks in gevuld ga terug.
      
    '
      ;
        header("refresh:3; ./index.php?content=register");
    break;

    case"emailexist":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
         UW EMAIL  E-MAILADRES BESTAAT AL, PROBEER EEN ANDERE EMAIL!!!
        </div>';
        header("refresh:3; ./index.php?content=register");
    break;
       
    case"register-error":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center " role="alert">
        Er is iets fout gegaan in het registratieproces. Probeer het nogmaals of neem contact op me
        admin@VOETBAL.nl
        </div>';
        header("refresh:3; ./index.php?content=register");
        
    break;
    case"register-success":
        echo' </div>
        <div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
      goed gedaan er word nu een activeer link gestuurd naar uw email.
        </div>';
        header("refresh:2; ./index.php?content=inloggen");
        
    break;
    case"hacker-alert":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        u heeft geen rechten op deze pagina
        </div>';
        header("refresh:3; ./index.php?content=home");
        
    break;
    case"password-empty":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        u heeft geen wachtwoord ingevuld....
        </div>';
        header("refresh:3; ./index.php?content=activate&id=$id&pwh=$pwh");
        
    break;
    case"password-no-match":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
      wachtwoord zijn niet gelijk probeer het opnieuw...
        </div>';
        header("refresh:3; ./index.php?content=activate&id=$id&pwh=$pwh");
        
    break;
    case"no-id-pwh-match":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        uw bent niet geregisteerd in de database, uw wordt doorgestuurd naar de registatiepagina
        </div>';
        header("refresh:3; ./index.php?content=register");
        
    break;
    case"update-succes":
        echo' </div>
        <div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
       uw bent succesvol gerigisteerd, u wordt doorgestuurd naar de inlogpagina....
        </div>';
        header("refresh:3; ./index.php?content=inloggen");
        
    break;
    case"update-error":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        Het registratieproces is niet gelukt, kies een nieuw wachtwoord
        </div>';
        header("refresh:3; ./index.php?content=activate&id=$id&pwh=$pwh");
        
    break;
    case "already-activate":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        Uw account is al actief, log in met uw zelfgekozen wachtwoord en emailadres.
        </div>';
        header("refresh:3; ./index.php?content=inloggen");
        
    break;
    case "no-match-pwh":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        Uw activatielinkgegevens zijn niet correct, registreer opnieuw.
        </div>';
        header("refresh:3; ./index.php?content=register");
        
    break;
    case "loginform-empty":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        U heeft een beide velden niet ingevuld, probeer het opnieuw...

        </div>';
        header("refresh:3; ./index.php?content=inloggen");
        
    break;
    case "email-unknown":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        Het door u ingevulde e-mailadres is bij ons niet bekend, probeer het opnieuw...

        </div>';
        header("refresh:3; ./index.php?content=inloggen");
        
    break;
    case "not-activated":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        Uw account is nog niet geactiveerd. Check uw e-mail<span class="badge badge-danger p-2 ">'. $email . '</span> door het klikken op de activatielink....
        </div>';
        header("refresh:3; ./index.php?content=register");
        
    break;
    case "no-pw-match":
        echo' </div>
        <div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
        Uw ingevulde wachtwoord voor het e-mailadres <span class="badge badge-danger p-2">'. $email . '</span> is niet correct,probeer het opnieuw....
        </div>';
        header("refresh:3; ./index.php?content=inloggen");
        
    break;
    case "uitloggen":
        echo' </div>
        <div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
        u bent uitgelogd, u word doorgestuurd naar de home page
        </div>';
        header("refresh:3; ./index.php?content=home");
        
        
    break;
    case "message-succes":
        echo' </div>
        <div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
        uw hebt  succesvol een bericht gestuurd, de antwoord komt binnen 2 werkdagen.
        </div>';
        header("refresh:3; ./index.php?content=home");
break;

        case"message-error":
            echo' </div>
            <div class="alert alert-danger mt-5 w-50 mx-auto text-center " role="alert">
            Er is iets fout gegaan in het messageproces. Probeer het nogmaals of neem contact op me
            mbo@hotmail.com.nl
            </div>';
            header("refresh:6; ./index.php?content=register");
            
        break;
   

   
    default:
        header("location: ./index.php?content=home");
    break;
    
}
?>
