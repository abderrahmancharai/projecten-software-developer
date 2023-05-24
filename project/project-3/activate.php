<?php

if (!(isset($_GET["content"]) && isset ($_GET["id"]) && isset($_GET ["pwh"]))){
header("location: ./index.php?content=message&alert=hacker-alert");
}
?>

<!-- <div class="container mt-5"> -->
  <!-- <div class="row"> -->
    <!-- <div class="col-12 col-sm-6"> -->
      <!-- <form action="./index.php?content=activate_script" method="post"> -->
        <!-- <div class="mb-3"> -->
          <!-- <label for="inputPassword" class="form-label"> kies uw nieuwe wachtwoord:</label> -->
          <!-- <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" required> -->
          <!-- <div id="passwordHelp" class="form-text">kies een veilig wachtwoord...</div> -->
        <!-- </div> -->
       <!-- <div class="mb-3"> -->
          <!-- <label for="inputPasswordCheck" class="form-label"> type het password opnieuw:</label> -->
          <!-- <input name="passwordCheck" type="password" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck" required> -->
          <!-- <div id="passwordHelpCheck" class="form-text">ter contole voert u nogmaals uw wachtwoord in...</div> -->
        <!-- </div> -->
        <!-- <input type="hidden" name="id" value="<?php echo $_GET["id"];?>"> -->
        <!-- <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"];?>"> -->
<!--  -->
<!--  -->
        <!-- <button type="submit" class="btn btn-success btn-lg btn-block ">activeer</button> -->
      <!-- </form> -->
    <!-- </div> -->
    <!-- <div class="col-12 col-sm-6"> -->
      <!-- <img src="https://thumbs.dreamstime.com/b/referee-showing-red-card-soccer-stadium-referee-showing-red-card-soccer-stadium-focus-card-109943815.jpg" alt="" class="w-75 mx-auto d-block"> -->
    <!-- </div> -->
  <!-- </div> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
<link rel="stylesheet" href="style.css">
<div class="wrapper">

    
    <form class="form-signin" action="./index.php?content=activate_script" method="post">    
      <h2 class="form-signin-heading"> activeer je account hier</h2>
      <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" required>
          <div id="passwordHelp" class="form-text"></div>
         
      <label class="checkbox">
        <input name="passwordCheck" type="password" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck" required>
          <div id="passwordHelpCheck" class="form-text"></div>

      </label>
      <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
        <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"];?>"> 
        
      <button class="btn btn-lg btn-primary btn-block" type="submit">activeer</button>   
    </form>
  </div>
