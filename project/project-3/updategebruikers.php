<?php
include('./connect_db.php');
$id = $_GET["id"];
$sql = "SELECT * from `register` WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
$record = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      
    <title>Hello, world!</title>
  </head>
  <body>
   
  <div class="conatainer-fluid"id="banner">
      <div class="row">
        <div class="col-12">
          <h1>turkije</h1>
          <h5>turkije nummer 1 </h5>
          <a class="btn btn-success" href="index.php">read </a>
        </div>
      </div>
    </div>



    <div class="container">
      <div class="row">
        <div class="col-6">

        <div class="mb-3">

        <form action="updategebruikers_script.php" method="post">
          <label class="form-label" for="inputfirtname">email:</label>
          <input value="<?php echo $record['email']; ?>" class="form-control" placeholder="invoer verplicht..." type="text" name="email" id="email" required> 
          </div>
          

          <div class="mb-3">

       


          
         
          <input type="hidden" name="id" value="<?php echo $id;?>">

          


          <input class="btn btn-outline-succes btn-lg" type="submit" value="verstuur">


          



       </form>
        



        





        <div class="col-6"></div>
        <img src="img/731100-Economische-chaos-in-Turkije-93c4.jpg" alt="" class="img-fluid">
      </div>
    </div>

    <script src="js/app.js" type="text/javascript"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>