
<?php 

	$conexion=mysqli_connect('20.25.51.254','server','123456789','newAzure');

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

<div class="container m-5">


<?php if (isset($_POST["Nombre"])){
$query = 'INSERT INTO usuario (Nombre,Apellido)
VALUES(\''.$_POST["Nombre"].'\',\''.$_POST["Apellido"].'\')';
$result = mysqli_query($conexion,$query) or die(mysqli_error());
 ?>
<div class="card p-3">
<p class="text-success">
<?php if ($query){
  echo 'Los datos se han insertado correctamente!';
}else{
  echo 'Algo ha salido mal!!!!';
}
 ?>
</p>
</div>
<?php } ?>


<form class="row g-3 needs-validation" action="index.php" method="POST" novalidate>

  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" name="Nombre"  required>
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte su nombre.
      </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="validationCustom02" name="Apellido"  required>
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte sus apellidos.
      </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>

</div>



<script>
(function () {
  'use strict'
  
  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

	<div class="mdl-grid">
		<div class="mdl-cell--4-col-phone mdl-cell--8-col-table mdl-cell--6-col-desktop mdl-cell--3-offset-desktop">
			<form action="php/proceso.php" method="POST" class="AjaxForm">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="Nombre">
					<label class="mdl-textfield__label">Nombre</label>
				</div>
				<br><br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="Apellido">
					<label class="mdl-textfield__label">Apelllido</label>
				</div>
				<br><br>
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
				 	Enviar datos
				</button>
			</form>
		</div>
	</div>
	<div class="msjRespuesta"></div>
<br>
<form action="php/proceso.php" method="POST" class="AjaxForm">
	<table border="1">
	  <tr>
		<td>Nombre</td>
		<td>Apellido</td>
	  </tr>
	 <?php
		$sql="SELECT * FROM usuario";
		$result=mysqli_query($conexion,$sql);
	        while($mostrar=mysqli_fetch_array($result)){	
	 ?>
    	  <tr>
		<td>php echo $mostrar['Nombre']</td>
		<td>php echo $mostrar['Apellido']</td>
	  </tr>
	<?php
	}
	?<	
      </table>
</form>
</body>
</html>
