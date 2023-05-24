
<?php



include("./functions.php");
include("./connect_db.php");

$id = sanitize($_POST["id"]);
$pwh = sanitize($_POST["pwh"]);
$password = sanitize($_POST["password"]);
$passwordCheck = sanitize($_POST["passwordCheck"]);

if (empty($_POST["password"]) || empty($_POST["passwordCheck"])) {
    header("Location: ./index.php?content=message&alert=password-empty&id=&i$id&pwh=$pwh");
} elseif (strcmp($password, $passwordCheck)) {
    header("Location: ./index.php?content=message&alert=password-no-match&id=&i$id&pwh=$pwh");
} else {



    $sql = "SELECT * FROM `register_newgebruiker` WHERE `id` = $id ";

    $result =  mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {

      $record =  mysqli_fetch_assoc($result);

    if  ($record["activated"]){
        header("location:./index.php?content=message&alert=already-activate");
    }
         else{

        if( !strcmp($record["password"],$pwh)){


            $password_hash = password_hash($password, PASSWORD_BCRYPT);
        
            // 2. Ga het record updaten met het nieuw gekozen gehashte wachtwoord
            $sql = "UPDATE `register_newgebruiker`
             SET `password` = '$password_hash',
                   `activated`= 1
             WHERE `id` = $id
             AND `password` ='$pwh'";
        
            if (mysqli_query($conn, $sql)) {
                //success
                header("location:./index.php?content=message&alert=update-succes");
            } else {
                //error
                header("Location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
            }
            // 3. Geef de gebruiker feedback met pen alert dat het updaten is gelukt of niet en stuur dan door naar een andere pagina.
    
            }else{
            header("Location: ./index.php?content=message&alert=no-match-pwh");


        }
    }          


    
    
    //echo "ik ga updadten";
    // 1. Maak een passwordhash voor het nieuw gekozen wachtwoord


        //updaten
    } else {
        // foutmelding
        header("Location: ./index.php?content=message&alert=no-id-pwh-match");
    }
}

?>
