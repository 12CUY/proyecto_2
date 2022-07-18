<?php
    include('../templates/menu.php')
    //menu union 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <title>Generador de códigos QR con PHP</title>
  </head>
  <body>
    
	<div class='container' >
	<h1>Generador de códigos QR con PHP</h1>
	<form method='post' id="generador">
	<div class='row'>
	<div class='col-md-4'>
		  <div class="form-group">
			<label for="textqr">Ingresa el texto</label>
			<input type="text" class="form-control" id="textqr"  placeholder="Ingresa el texto" required>
			
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Generar</button>
	</div>
	
	<div class='col-md-2'>
		  <div class="form-group">
			<label for="textqr">Tamaño</label>
			<select class='form-control' id='sizeqr'>
				<option value='100'>100 px</option>
				<option value='200' selected>200 px</option>
				<option value='300'>300 px</option>
				<option value='400'>400 px</option>
				<option value='500'>500 px</option>
			</select>
			
		  </div>
		  
		  
	</div>
	<div class='col-md-6'>
		<div class='result'>
		
		</div>
	</div>
	</div> 
	
	  
	  
	  
</form>
	</div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$( "#generador" ).submit(function( event ) {
			var textqr=$("#textqr").val();
			var sizeqr=$("#sizeqr").val();
			parametros={"textqr":textqr,"sizeqr":sizeqr};
			 $.ajax({
				 type: "POST",
				url: "qr.php",
				data: parametros,
				success: function(datos){
					$(".result").html(datos);
				}
				 
			 })
			
		  event.preventDefault();
		});
	</script>
  </body>