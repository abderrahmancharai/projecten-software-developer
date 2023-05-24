<?php

if (!(isset($_GET["content"]) && isset ($_GET["id"]) && isset($_GET ["pwh"]))){
header("location: ./index.php?content=message&alert=hacker-alert");
}
?>


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
