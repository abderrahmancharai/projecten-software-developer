
<?php
// var_dump($_POST);
include("./connect_db.php");
include("./functions.php");
$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);
if (empty($email) || empty($password)) {

    header("Location: ./index.php?content=message&alert=loginform-empty");
} else {

                        $sql = "SELECT * FROM `register_newgebruiker` WHERE `email` = '$email'";
                        $result = mysqli_query($conn, $sql);

                        //var_dump((bool)mysqli_num_rows($result));


                        if (!mysqli_num_rows($result)) {
                            // E-mailadres onbekend...
                            header("Location: ./index.php?content=message&alert=email-unknown");
                        } else{
                                    $record = mysqli_fetch_assoc($result);
                                    //var_dump((bool)$record["activated"]);

                                    if(!$record["activated"]){
                                        header("Location: ./index.php?content=message&alert=not-activated&email=$email");

                                    } elseif (!password_verify($password,$record["password"])){
                                        header("Location: ./index.php?content=message&alert=no-pw-match&email=$email");


                                    } else{
                                        // 'root', 'admin', 'customer' ,'moderator




                                        $_SESSION["id"] = $record["id"];
                                        $_SESSION["userrole"] = $record["userrole"];
                                        
                                        // var_dump($_SESSION);exit();

                                        switch($record["userrole"]){
                                            case 'customer':
                                             header("Location: ./index.php?content=c-home");
                                             break;
                                             case 'root':
                                                header("Location: ./index.php?content=r-home");
                                                break;
                                             case 'admin':
                                            header("Location: ./index.php?content=admindashboard");
                                            break;
                                            
                                            case 'moderator':
                                            header("Location: ./index.php?content=m-home");
                                            break;
                                            default:
                                            header("Location: ./index.php?content=home");
                                            break;
                                        }


                                    }
                                    
                                    
                                       
                                    
                                }

                    }
?> 