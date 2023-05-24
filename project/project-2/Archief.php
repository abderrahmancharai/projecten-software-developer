<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>son</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

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
              <li><a href="index.php">Home</a></li>
              <li><a href="Archief.php">Archief</a></li>
              <li><a href="news.php">new news</a></li>
              <li><a href="read.php">read</a></li>
              <li><a onclick="document.getElementById('login-modal').style.display = 'flex';">Login</a></li>
            </ul>
          </div>
        </nav>

    </header>
    <script src="script.js" type="text/javascript"></script>

                <h1>archief</h1>    
     <!-- header -->
     <header>
        

            <!-- nav bar -->

            <!DOCTYPE html>

            <?php
$servername = "localhost";
$username = "be_p3";
$password = "d2ZJew1Tuq5c9ZuG";
$dbname = "voetbal_be";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql = "SELECT id, kleintext, hoodtext FROM texttest ";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br> id: ". $row["id"]. " - Name: ". $row["kleintext"]. " " . $row["hoodtext"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();
//

$sql = "SELECT * FROM texttest ORDER BY id DESC ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo '<div class="content-wrapper">';
    
    while($row = $result->fetch_assoc()) {
        
      echo 
  
    
      '<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
      </head>
      <body>

      
      <a class="no-decoration" href="index.php?home='. $row["id"] .'">
      
      <div class="news-card">
      <a href="readmore.php?id='. $row["id"] .'" class="news-card__card-link"></a>
      <img src="'. $row["img"] .'" alt="" class="news-card__image">
      <div class="news-card__text-wrapper">
        <h2 class="news-card__title"><b>'. $row["hoodtext"] .'</b></h2>
        <div class="news-card__post-date">'. $row[  "news_edit_time"] .'</div>
        <div class="news-card__details-wrapper">
          <p class="news-card__excerpt">'. $row["kleintext"] .' </p>
          
          <a href="readmore.php?id='. $row["id"] .'" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
      </div>
      
    
      
    
      </a>  '
    
    ;
      
  } 
  }
  $conn->close();
 ?>

<?php
include("connect_db.php");

$sql = "SELECT * from `texttest`"; 
$result = mysqli_query($conn, $sql);


$rows = "";

// echo $result; 

while($record = mysqli_fetch_assoc($result)){
    // var_dump($record);
    $rows .="
               
                <a href= 'readmore.php?id={$record['id']}'>
               update
                </a>"
                
               
                
  
            
             ;
             
}


?>
    
  
    

      <style>
          * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Open Sans";
}

body {
  background-color: #555;
}

h1{
    text-align: center;
    color: whitesmoke;
    padding: 3rem;
}

.content-wrapper {
  margin: 0 auto;
  max-width: 1200px;
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  padding: 0.5rem;
}

.news-card {
  border: 0px solid aqua;
  margin: 0.5rem;
  position: relative;
  height: 12rem;
  overflow: hidden;
  border-radius: 0.5rem;
  flex: 1;
  min-width: 290px;
  box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
}

@media (min-width: 900px) {

.news-card {
    height: 20rem
}
  }

.news-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.7) 80%);;
      z-index: 0;
    }

.news-card__card-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
/*     background: rgba(255,0,0,.5); */
  }

.news-card__image {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform 3s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    position: relative;
    z-index: -1;
  }

.news-card__text-wrapper {
    position: absolute;
    bottom: 0rem;
    padding: 1rem;
    color: white;
/*     background-color: rgba(0, 0, 0, 0.4); */
    transition: background-color 1.5s ease;
  }

.news-card__title {
    transition: color 1s ease;
    margin-bottom: .5rem;
  }

.news-card__post-date {
    font-size: .7rem;
    margin-bottom: .5rem;
    color: #CCC;
  }

.news-card__details-wrapper {
    max-height: 0;
    opacity: 0;
    transition: max-height 1.5s ease, opacity 1s ease;
  }

@media (min-width: 900px) {
    .news-card:hover .news-card__details-wrapper {
      max-height: 20rem;
      opacity: 1;
    }
    .news-card:hover .news-card__text-wrapper {
      background-color: rgba(0, 0, 0, 0.6);
    }
    .news-card:hover .news-card__title {
      color: #00ffd5;
    }
    .news-card:hover .news-card__image {
      transform: scale(1.2);
      z-index: -1;
    }
  }

.news-card__excerpt {
    font-weight: 300;
  }

.news-card__read-more {
    background: black;
    color: #bbb;
    display: block;
    padding: 0.4rem 0.6rem;
    border-radius: 0.3rem;
    margin-top: 1rem;
    border: 1px solid #444;
    font-size: 0.8rem;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    text-decoration: none;
    width: 7rem;
    margin-left: auto;
    position: relative;
    z-index: 5;
  }

.news-card__read-more i {
      position: relative; 
      left: 0.2rem;
      color: #888;
      transition: left 0.5s ease, color 0.6s ease;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

.news-card__read-more:hover i {
      left: 0.5rem;
      color: yellow;
    }

      </style>
</body>
</html>


    
      <div class="modal" id="login-modal" style="display:none;"> 
        <div class="container right-panel-active">
          <!-- Sign Up -->
          <div class="container__form container--signup">
              <form action="#" class="form" id="form1">
                  <h2 class="form__title">Sign Up</h2>
                  <input type="email" placeholder="Email" class="input" />  
                  <button class="btn">Sign Up</button>
              </form>
          </div>
      
          <!-- Sign In -->
          <div class="container__form container--signin">
              <form action="#" class="form" id="form2">
                  <h2 class="form__title">Sign In</h2>
                  <input type="email" placeholder="Email" class="input" />
                  <input type="password" placeholder="Password" class="input" />
                  <button class="btn">Sign In</button>
              </form>
          </div>
      
          <!-- Overlay -->
          <div class="container__overlay">
              <div class="overlay">
                  <div class="overlay__panel overlay--left">
                      <button class="btn" id="signIn">Sign In</button>
                  </div>
                  <div class="overlay__panel overlay--right">
                      <button class="btn" id="signUp">Sign Up</button>
                  </div>
              </div>
          </div>
      </div>
      </div>


    </body>
    </html>

      <style>
          * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Open Sans";
}

body {
  background-color: #555;
}

.content-wrapper {
  margin: 0 auto;
  max-width: 1200px;
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  padding: 0.5rem;
}

.news-card {
  border: 0px solid aqua;
  margin: 0.5rem;
  position: relative;
  height: 12rem;
  overflow: hidden;
  border-radius: 0.5rem;
  flex: 1;
  min-width: 290px;
  box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
}

@media (min-width: 900px) {

.news-card {
    height: 20rem
}
  }

.news-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.7) 80%);;
      z-index: 0;
    }

.news-card__card-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
/*     background: rgba(255,0,0,.5); */
  }

.news-card__image {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform 3s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    position: relative;
    z-index: -1;
  }

.news-card__text-wrapper {
    position: absolute;
    bottom: 0rem;
    padding: 1rem;
    color: white;
/*     background-color: rgba(0, 0, 0, 0.4); */
    transition: background-color 1.5s ease;
  }

.news-card__title {
    transition: color 1s ease;
    margin-bottom: .5rem;
  }

.news-card__post-date {
    font-size: .7rem;
    margin-bottom: .5rem;
    color: #CCC;
  }

.news-card__details-wrapper {
    max-height: 0;
    opacity: 0;
    transition: max-height 1.5s ease, opacity 1s ease;
  }

@media (min-width: 900px) {
    .news-card:hover .news-card__details-wrapper {
      max-height: 20rem;
      opacity: 1;
    }
    .news-card:hover .news-card__text-wrapper {
      background-color: rgba(0, 0, 0, 0.6);
    }
    .news-card:hover .news-card__title {
      color: #00ffd5;
    }
    .news-card:hover .news-card__image {
      transform: scale(1.2);
      z-index: -1;
    }
  }

.news-card__excerpt {
    font-weight: 300;
  }

.news-card__read-more {
    background: black;
    color: #bbb;
    display: block;
    padding: 0.4rem 0.6rem;
    border-radius: 0.3rem;
    margin-top: 1rem;
    border: 1px solid #444;
    font-size: 0.8rem;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    text-decoration: none;
    width: 7rem;
    margin-left: auto;
    position: relative;
    z-index: 5;
  }

.news-card__read-more i {
      position: relative;
      left: 0.2rem;
      color: #888;
      transition: left 0.5s ease, color 0.6s ease;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

.news-card__read-more:hover i {
      left: 0.5rem;
      color: yellow;
    }
    /* Style the header with a grey background and some padding */
    .header {
  overflow: hidden;
  background-color: #f1f1f100;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 0px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;

  }
}

:root {
	/* COLORS */
	--white: #e9e9e9;
	--gray: #333;
	--blue: #0367a6;
	--lightblue: #008997;

	/* RADII */
	--button-radius: 0.7rem;

	/* SIZES */
	--max-width: 758px;
	--max-height: 420px;

	font-size: 16px;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
		Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}

.modal{
  display: flex;
  position: fixed;
  width: 100vw;
  height: 100vh;
  justify-content: center;
  align-items: center;
  left: 0;
  top: 0;
}


.form__title {
	font-weight: 300;
	margin: 0;
	margin-bottom: 1.25rem;
}

.link {
	color: var(--gray);
	font-size: 0.9rem;
	margin: 1.5rem 0;
	text-decoration: none;
}

.container {
	background-color: var(--white);
	border-radius: var(--button-radius);
	box-shadow: 0 0.9rem 1.7rem rgba(0, 0, 0, 0.25),
		0 0.7rem 0.7rem rgba(0, 0, 0, 0.22);
	height: var(--max-height);
	max-width: var(--max-width);
	overflow: hidden;
	position: relative;
	width: 100%;
}

.container__form {
	height: 100%;
	position: absolute;
	top: 0;
	transition: all 0.6s ease-in-out;
}

.container--signin {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .container--signin {
	transform: translateX(100%);
}

.container--signup {
	left: 0;
	opacity: 0;
	width: 50%;
	z-index: 1;
}

.container.right-panel-active .container--signup {
	animation: show 0.6s;
	opacity: 1;
	transform: translateX(100%);
	z-index: 5;
}

.container__overlay {
	height: 100%;
	left: 50%;
	overflow: hidden;
	position: absolute;
	top: 0;
	transition: transform 0.6s ease-in-out;
	width: 50%;
	z-index: 100;
}

.container.right-panel-active .container__overlay {
	transform: translateX(-100%);
}

.overlay {
	background-color: var(--lightblue);
	background: url("https://res.cloudinary.com/dci1eujqw/image/upload/v1616769558/Codepen/waldemar-brandt-aThdSdgx0YM-unsplash_cnq4sb.jpg");
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	height: 100%;
	left: -100%;
	position: relative;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
	width: 200%;
}

.container.right-panel-active .overlay {
	transform: translateX(50%);
}

.overlay__panel {
	align-items: center;
	display: flex;
	flex-direction: column;
	height: 100%;
	justify-content: center;
	position: absolute;
	text-align: center;
	top: 0;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
	width: 50%;
}

.overlay--left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay--left {
	transform: translateX(0);
}

.overlay--right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay--right {
	transform: translateX(20%);
}

.btn {
	background-color: var(--blue);
	background-image: linear-gradient(90deg, var(--blue) 0%, var(--lightblue) 74%);
	border-radius: 20px;
	border: 1px solid var(--blue);
	color: var(--white);
	cursor: pointer;
	font-size: 0.8rem;
	font-weight: bold;
	letter-spacing: 0.1rem;
	padding: 0.9rem 4rem;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.form > .btn {
	margin-top: 1.5rem;
}

.btn:active {
	transform: scale(0.95);
}

.btn:focus {
	outline: none;
}

.form {
	background-color: var(--white);
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 3rem;
	height: 100%;
	text-align: center;
}

.input {
	background-color: #fff;
	border: none;
	padding: 0.9rem 0.9rem;
	margin: 0.5rem 0;
	width: 100%;
}

@keyframes show {
	0%,
	49.99% {
		opacity: 0;
		z-index: 1;
	}

	50%,
	100% {
		opacity: 1;
		z-index: 5;
	}
}



</style>

<script>
const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const fistForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");

signInBtn.addEventListener("click", () => {
	container.classList.remove("right-panel-active");
});

signUpBtn.addEventListener("click", () => {
	container.classList.add("right-panel-active");
});

fistForm.addEventListener("submit", (e) => e.preventDefault());
secondForm.addEventListener("submit", (e) => e.preventDefault());

// Get the modal
var modal = document.getElementById('login-modal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
      
</body>
</html>

    <script src="script.js" type="text/javascript"></script>

</body>
</html>