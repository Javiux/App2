<?php 

	$conexion=mysqli_connect('20.25.51.254','server','123456789','newAzure');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>nombre</td>
			<td>apellido</td>
		</tr>

		<?php 
		$sql="SELECT * from usuario";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Apellido'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>
