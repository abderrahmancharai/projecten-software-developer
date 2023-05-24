<!-- <div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-6">

      <form action="./index.php?content=inloggen_script" method="post">
        <div class="mb-3">
          <label for="inputEmail" class="form-label"> vul hier uw Email address</label>
          <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required autofocus>
          <div id="emailHelp" class="form-text">uw privacy is gegarandeerd...</div>
        </div>

        <div class="mb-3">
          <label for="inputPassword" class="form-label"> vul hier uw wachtwoord</label>
          <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" required>
          <div id="passwordHelp" class="form-text">Pas op voor meekijkers tijdens het invoeren...</div>
        </div>

        <button type="submit" class="btn btn-warning btn-lg btn-block ">log in</button>
      </form>

    </div>
    <div class="col-12 col-sm-6">
      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/soccer-ball-in-goal-royalty-free-image-1622190584.jpg?crop=0.97862xw:1xh;center,top&resize=1200:*" alt="" class="w-75 mx-auto d-block">
    </div>
  </div>
</div> -->

<div class="wrapper">

    
    <form class="form-signin" action="./index.php?content=inloggen_script" method="post">    
      <h2 class="form-signin-heading">Please login</h2>
      <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required autofocus>
    
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>   
         
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
  <style>



.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  
}
  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	
  }
	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
  }
    @include box-sizing(border-box);

		:focus {
		  z-index: 2;
		}
	

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}

</style>