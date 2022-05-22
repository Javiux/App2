<?php 

	$conexion=mysqli_connect('10.0.0.5','usuario1','usuario1','proyecto');

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cloud Computing Project</title>
	<link rel="icon" href="icono.png">
	<link rel="stylesheet" href="css/material.min.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/SendForm.js"></script>
	<script src="js/material.min.js"></script>
</head>
<body>
		<img src="icono.png" style="width: 100px; height: 90px; position: fixed; margin-top: -80px; margin-left: 15px;">
		<img src="names.png" style="width: 270px; height: 60px; position: fixed; margin-top: -70px; margin-left: 1220px;">

		<p style="color: rgba(255, 255, 255, 0.911); text-align: center; margin-top: 80px; font-size: 50px;font-family: Century Gothic;">Bienvenido</p>
    	<div class="mdl-grid">
		<div style="background-color: rgba(255, 255, 255, 0.844); text-align: center; margin-top: -110px; width: 500px; height: 300px; color: black; margin: 150px auto; border-radius: 5px;" class="mdl-cell--4-col-phone mdl-cell--8-col-table mdl-cell--6-col-desktop mdl-cell--3-offset-desktop">
			<form action="php/proceso.php" method="POST" class="AjaxForm">
				<br><br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="nombre">
					<FONT color="black">
					<label class="mdl-textfield__label">Nombre:</label>
				        </FONT>
				</div>
				<br><br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="numero_control">
					<label class="mdl-textfield__label">No. Control:</label>
				</div>
				<br><br>
				<button style="background-color: rgba(50, 2, 117, 0.327)" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect", onclick="setTimeout(function(){location.reload();}, 1000);">
				 	Enviar datos
				</button>
			</form>
		</div>
	</div>
	<div class="msjRespuesta"></div>

<br>
	<div id="main-container">
	<table border="1">
	  <tr>
		<th>Nombre</th>
		<th>No. Control</th>
	  </tr>
	 <?php
		$sql="SELECT * FROM alumnos";
		$result=mysqli_query($conexion,$sql);
	        while($mostrar=mysqli_fetch_array($result)){	
	 ?>
    	  <tr>
		<td><?php echo $mostrar['nombre']?></td>
		<td><?php echo $mostrar['numero_control']?></td>
	  </tr>
	<?php
	}
	?>	
      </table>
	</div>

</body>
</html>
