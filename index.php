<?php 

	$conexion=mysqli_connect('10.0.0.4','usuario1','usuario1','proyecto');

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ajax php</title>
	<link rel="stylesheet" href="css/material.min.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/SendForm.js"></script>
	<script src="js/material.min.js"></script>
</head>
<body>
    	<div class="mdl-grid">
		<div class="mdl-cell--4-col-phone mdl-cell--8-col-table mdl-cell--6-col-desktop mdl-cell--3-offset-desktop">
			<form action="php/proceso.php" method="POST" class="AjaxForm">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="nombre">
					<FONT COLOR="red">
					<label class="mdl-textfield__label">Nombre:</label>
				        </FONT>
				</div>
				<br><br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="numero_control">
					<label class="mdl-textfield__label">No. Control:</label>
				</div>
				<br><br>
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect", onclick="setTimeout(function(){location.reload();}, 1000);">
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
