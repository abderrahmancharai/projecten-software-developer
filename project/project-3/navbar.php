<?php
  $active = (isset($_GET["content"]))? $_GET["content"]:"";
?>




<link rel="stylesheet" href="css/navbar.css">
<header>
        <nav class="navbar">
          <div class="brand-title">son</div>
          <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
          <div class="navbar-links">
            <ul>
              <li><a href="./index.php?content=home">Home</a></li>
              <li><a href="./index.php?content=home">Home</a></li>
              <li><a href="./index.php?content=home">Home</a></li>
            
           
          
              
           
            <script src="js/script.js" type="text/javascript"></script>
            
          
    
              
          


        
        <?php
        // var_dump($_SESSION);exit();
        if (isset($_SESSION["id"])){
          switch($_SESSION["userrole"]){
            case'admin':
              echo'<li><a href="./index.php?content=Archief">Archief</a></li>
              <li><a href="./index.php?content=admindashboard">admin</a></li>
              
      ';



              break;          
            case 'root':
             echo' <li class="nav-item ">
              <a class="nav-link ';echo ( $active ==  "rootpage") ? "active": "" ;echo'" href="./index.php?content=rootpage">rootpage</a>
            </li>';


            break;
            case 'moderator':
              echo' <li><a href="./index.php?content=Archief">Archief</a></li>
              <li><a href="./index.php?content=m-home">writer</a></li>';
             

            break;
            case 'customer':
            echo'  <li><a href="./index.php?content=Archief">Archief</a></li>';


            break;
            default:

            
            break;



          }

            echo ' 
            
            <li><a href="./index.php?content=uitloggen">uitloggen</a></li>';

        } else {
          echo '
          <li><a href="./index.php?content=register">register</a></li>
          <li><a href="./index.php?content=inloggen">inloggen</a></li>
           ';
              }

        ?>
     
            </ul> 
          </div>
        </nav>

    </header>
    
