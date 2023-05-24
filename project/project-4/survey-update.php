<?php

include('connect_db.php');
$id = $_GET["id"];
$sql = "SELECT * from `enquete-veranderen` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$record = mysqli_fetch_assoc($result);
?>


<link rel="stylesheet" href="css/contact.css">
<a href="survey-read.php">read</a>
<form action="survey-update-script.php" method="post">
          <div class="container">
	<div class="row">
			<h1>contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">Verander de vragen</h4>
	</div>

	<div class="row input-container">
  
			<div class="col-xs-12">
     
				<div class="styled-input wide">
        <input value="<?php echo $record['vraag1'];?>" type="vraag1" id="vraag1" name="vraag1" placeholder="" required/>
					<label>vraag1</label> 
				</div>
			</div>
      <div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
        <input value="<?php echo $record['vraag2'];?>" type="vraag2" id="vraag2" name="vraag2" placeholder="" required/>
					<label>vraag2</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
        <input value="<?php echo $record['vraag3'];?>" type="vraag3" id="vraag3" name="vraag3" placeholder="" required/> 
					<label>vraag3</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
        <input value="<?php echo $record['vraag4'];?>" type="vraag4" id="vraag4" name="vraag4" placeholder="" required/> 
					<label>vraag4</label> 
				</div>
			</div>
            <input value="<?php echo $record['vraag5'];?>" type="vraag5" id="vraag5" name="vraag5" placeholder="" required/> 
					<label>vraag5</label> 
				</div>
			</div>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            
		
			<div class="col-xs-12">
			<button>	<div class="btn-lrg submit-btn">Update</div></button>
			</div>
	</div>
</div>


          



       </form>