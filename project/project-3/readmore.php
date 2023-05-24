
<?php
session_start();
include('./connect_db.php');
$id = $_GET["id"];
$sql = "SELECT * from `texttest` WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
$record = mysqli_fetch_assoc($result);

?>





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
    <div class="row">
                <div class="col-12 px-0">
                    <?php include("./navbar.php"); ?>
                </div>
            </div>
    </header>
    <script src="script.js" type="text/javascript"></script>
     <!-- header -->
     <header>



	
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
<style>
    </style>


     
        

            <!-- nav bar -->

           

  


      
</body>
</html>
<link rel="stylesheet" href="css/readmore.css">
    <script src="script.js" type="text/javascript"></script>

</body>
</html>