<!-- <?php
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/home.css">
  <header>
    <nav class="navbar">
      <div class="brand-title">MBO Utrecht</div>
      <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="navbar-links">
        <ul>
          <li><a href="./index.php?content=home">Home</a></li>
          <li><a href="./index.php?content=aboutmbo">about mbo</a></li>
          <li><a href="./index.php?content=navigatie">Navigatie</a></li>
          <li><a href="./index.php?content=survey">Survey</a></li>
          <li><a href="./index.php?content=opleiding">opleiding</a></li>
          <li><a href="./index.php?content=plattegrond">plattegrond</a></li>








                    <script src="js/script.js" type="text/javascript"></script>








                    <?php
          // var_dump($_SESSION);exit();
          if (isset($_SESSION["id"])) {
            switch ($_SESSION["userrole"]) {
              case 'admin':
                echo '
              <li><a href="./index.php?content=admindashboard">admin</a></li>
              
      ';



                break;
              case 'root':
                echo ' <li class="nav-item ">
              <a class="nav-link ';
                echo ($active ==  "rootpage") ? "active" : "";
                echo '" href="./index.php?content=rootpage">rootpage</a>
            </li>';


                break;
              case 'moderator':
                echo ' <li><a href="./index.php?content=Archief">Archief</a></li>
              <li><a href="./index.php?content=m-home">writer</a></li>';


                break;
              case 'customer':
                echo '  <li><a href="./index.php?content=opendag">opendag</a></li>';


                break;
              default:


                break;
            }

            echo ' 
            
            <li><a href="./index.php?content=uitloggen">Logout</a></li>';
          } else {
            //dit is wat iedreen ziet dus
            echo '
          <li><a href="./index.php?content=register">Register</a></li>
          <li><a href="./index.php?content=inloggen">Login</a></li>
           ';
          }

          ?>

                </ul>
            </div>
        </nav>

    </header>


</body>

</html> -->