<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>son</title>

</head>
<body>

   
    <script src="script.js" type="text/javascript"></script>
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
$sql = "SELECT * FROM texttest ORDER BY id DESC LIMIT 2";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo '<div class="content-wrapper">';
    while($row = $result->fetch_assoc()) {

      
        
      echo 
    
    
      '

      
      <a class="no-decoration" href="index.php?home='. $row["id"] .'">
      
      <div class="news-card">
      <a href="readmore.php?id='. $row["id"] .'" class="news-card__card-link"></a>
      <img src="'. $row["img"] .'" alt="" class="news-card__image">
      <div class="news-card__text-wrapper">
        <h2 class="news-card__title"><b>'. $row["hoodtext"] .'</b></h2>
        <div class="news-card__post-date">'. $row["news_edit_time"] .'</div>
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

$sql = "SELECT * FROM texttest ORDER BY id DESC LIMIT 9 offset 2";
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

    
  
    

</body>
</html>
<link rel="stylesheet" href="css/newscard.css"></link>


    
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




      
</body>
</html>

    <script src="script.js" type="text/javascript"></script>

</body>
</html>