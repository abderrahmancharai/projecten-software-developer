<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Mbo Utrecht</title>
    
</head>

<body>

    <main>
        
        <section class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <?php include("./navbar.php"); ?>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <?php include("./content.php"); ?>

                </div>
            </div>
        </section>
        
        <section class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <?php include("./footer.php"); ?>

                </div>
            </div>
        </section>
    </main>


 
    <script src="js/app.js"></script>
   <link rel="stylesheet" href="css/indexcsspadding.css">
</body>


</html>