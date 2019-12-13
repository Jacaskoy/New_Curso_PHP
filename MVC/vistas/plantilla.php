<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ejemplo MVC</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<head>

</head>
<body>
<!--=====================================
	LOGOTIPO
	======================================-->

	<div class="container-fluid">
		
		<h3 class="text-center py-3">LOGO</h3>

	</div>
<!--=====================================
	BOTONERA
	======================================-->

	<div class="container-fluid  bg-light">
		
		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">
			
		

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=registro">Registro</a>
					</li>



					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
					</li>



					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
					</li>

			

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=salir">Salir</a>
					</li>
<div class="container-fluid">
		
		<div class="container py-5">
			<?php

			if(isset($_GET["pagina"])){

				if($_GET["pagina"] =="registro" ||
					$_GET["pagina"] =="ingreso" ||
					$_GET["pagina"] =="inicio" ||
					$_GET["pagina"] =="salir" ||

				include "paginas/"$_GET["pagina"]."".php";
			}
			else {

				include "paginas/rgistro.php";
			 
			}
			?>
					          
			<table class="table">
				<thead>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>John</td>
						<td>Doe</td>
						<td>john@example.com</td>
					</tr>
					<tr>
						<td>Mary</td>
						<td>Moe</td>
						<td>mary@example.com</td>
					</tr>
					<tr>
						<td>July</td>
						<td>Dooley</td>
						<td>july@example.com</td>
					</tr>
				</tbody>
			</table>

		</div>

	</div>



			</ul>

		</div>

	</div>

</body>
</html>