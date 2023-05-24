<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Survey Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="css/survey.css">
	</head>
	<body>

		<form class="survey-form" method="post" action="process-survey">		
		<h1><i class="far fa-list-alt"></i>Survey Form</h1>

<div class="step-content current">
	<div class="fields">
		<p>Hoe was het ervaring met ons?</p>
		<div class="rating">
			<input type="radio" name="rating" id="radio1" value="Very Unsatisfied">
			<label for="radio1">1</label>
			<input type="radio" name="rating" id="radio2" value="Unsatisfied">
			<label for="radio2">2</label>
			<input type="radio" name="rating" id="radio3" value="Neutral">
			<label for="radio3">3</label>
			<input type="radio" name="rating" id="radio4" value="Satisfied">
			<label for="radio4">4</label>
			<input type="radio" name="rating" id="radio5" value="Very Satisfied">
			<label for="radio5">5</label>
		</div>
		<div class="rating-footer">
			<span>Heel Ontevreden</span>
			<span>Heel Tevreden</span>
		</div>
		<p>Waarom heb je voor MBO Utrecht gekozen?</p>
		<div class="col-70">
        <textarea id="subject" name="hoezo-mboutrecht" placeholder="" style="height:200px"></textarea>
      </div>		
		</div>		
		<p>Was het lokaal te vinden met de gegeven informatie?</p>
		<div class="group">
			<label for="radio10">
				<input type="radio" name="lokaal-te-vinden" id="radio6" value="Makelijk">
				Makelijk
			</label>
			<label for="radio11">
				<input type="radio" name="lokaal-te-vinden" id="radio7" value="Tedoen">
			Te doen
			</label>
			<label for="radio11">
				<input type="radio" name="lokaal-te-vinden" id="radio7" value="Nee">
			Nee
			</label>

			<p>Wat is je voornaam?</p>
		<div class="col-70">
        <textarea id="subject" name="voornaam" placeholder="" style="height:50px"></textarea>
      </div>		

	  <p>Wat is je achternaam?</p>
		<div class="col-70">
        <textarea id="subject" name="achternaam" placeholder="" style="height:50px"></textarea>
      </div>		


		</div>					
	</div>
	<div class="buttons">
		<input class= "btn" type="submit" name="action" value="Submit" />
	</div>
</div>
		</form>

        
	</body>
</html>

