<?php
include('./connect_db.php');
$id = $_GET["id"];
$sql = "SELECT * from `texttest` WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
$record = mysqli_fetch_assoc($result);

?>







	
	<div class="info-wrapper">
		<h1 class="headline"><?php echo $record['hoodtext'];?></h1>
		<h2 class="subhead"><?php echo $record['kleintext']; ?></h2>
		<div class="article-meta">
			
			<p class="byline">  </p>
			<p class="dateline"> <?php echo $record['kleintext']; ?></p>
			<p class="article-tags">
				
			</p>
		</div>
	</div>
     </header>


<section>
<figure><img src="<?php echo $record['img'];?>" alt="a smiling person in a pink hoodie, standing in front of a bright pink lighted arcade basketball game. " />
		<figcaption>Photo by imran (futch)</figcaption>
	</figure>
	<p><?php echo $record['readmore'];?></p>
	

	

	<!-- full size image: https://images.unsplash.com/photo-1601637155580-ac6c49428450-->

</section>
<style>@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    
    header {
        width: 100%;
      
    }
    
    .bg-wrapper {
        height: 50px;
        width: 100%;
        background: url("https://images.unsplash.com/photo-1533236897111-3e94666b2edf");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .info-wrapper {
        padding: 30px;
        width: 100%;
        background: #030025;
        color: white;
        font-family: "Poppins", sans-serif;
        text-align: center;
    }
    
    .headline {
        font-size: clamp(32px, 10vw, 80px);
    }
    
    .subhead {
        font-size: clamp(16px, 4vw, 24px);
    }
    
    .article-meta {
        display: inline-block;
        padding: 10px;
        margin-top: 30px;
        font-size: clamp(14px, 3vw, 18px);
    }
    
    #author-avatar {
        width: 100px;
        height: 100px;
    }
    
    .byline {
        font-weight: 600;
    }
    
    .dateline {
        font-style: italic;
        font-weight: 400;
        font-size: clamp(14px, 2.8vw, 16px);
    }
    
    .article-tags {
        margin-top: 10px;
    }
    
    .tag {
        display: inline-block;
        padding: 2px 10px;
        margin: 3px 1px;
        border-radius: 5px;
        background: #f36500;
    }
    
    section {
        width: 85%;
        max-width: 800px;
        margin: 50px auto;
    }
    
    section h2 {
        font-family: "Poppins", sans-serif;
        font-size: clamp(20px, 3.5vw, 24px);
    }
    
    section p {
        font-family: "Poppins", sans-serif;
        font-size: clamp(16px, 2.8vw, 18px);
        margin: 15px auto;
    }
    
    figure {
        width: 90%;
        max-width: 400px;
        margin: 10px auto;
    }
    
    figure img {
        max-width: 100%;
    }
    
    figure figcaption {
        font-family: "Poppins", sans-serif;
        font-size: clamp(14px, 2.5vw, 16px);
    }
    
    aside {
        width: 40%;
        float: right;
        box-shadow: inset 5px 0 5px -5px #29627e;
        padding-left: 0.5rem;
        margin: 10px 0;
        margin-left: 0.5rem;
    }
    
    .outside-text {
        width: 80%;
        float: none;
    }
    
    aside p {
        font-style: italic;
        color: #29627e;
        /* 	background: yellow; */
        margin: 0.5rem;
    }
    </style>


     
        

            <!-- nav bar -->

           

  

<style>
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