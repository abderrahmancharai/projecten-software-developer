<?php
include("connect_db.php");

$sql = "SELECT * from `register_newgebruiker`"; 
$result = mysqli_query($conn, $sql);


$rows = "";

// echo $result; 

while($record = mysqli_fetch_assoc($result)){
    // var_dump($record);
    $rows .="<tr>
                <td>{$record['id']}</td>
                <td>{$record['email']}</td>

                
                <td>
                <a href= 'updategebruikers.php?id={$record['id']}'>
               update
                </a>
                
                <td>
                <a href= 'deletegebruikers.php?id={$record['id']}'>
               delete
                </a>
            
                </td>
                
  
             </tr>"
             ;
             
}

?>
    <style>
                </style>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylerefrensie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>read</title>
  </head>
  <body>
   
  <h1>Referenties</h1>
      <h1>Hier zie je andere mensen mening. </h1>
  <div class="read"><a href="index.php">read</a></div>

  
        



    <div class="container">
      <div class="row">
        <div class="col-12">
<table border=1 id="table_detail"'align=center cellpadding=10>
 
    <thead>
        <tr>
        <th>id</th>
            <th>email</th>
            
            <th>update</th>
            <th>delete</th>
           


        </tr>          

    </thead>

    <tbody>
        <?php echo $rows; ?>
    </tbody>


</table>

       </div>
        </div>
       
    </div>

   

      
  </body>
</html>