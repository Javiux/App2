
<div id="actualiza">
	<?php 

	#$conexion=mysqli_connect('localhost','root','','pruebas');

 ?>

  <table border="1">
	  <tr>
		<td>Nombre</td>
		<td>Apellido</td>
	  </tr>
	 <?php
		$sql="SELECT * FROM alumnos";
		$result=mysqli_query($conexion,$sql);
	        while($mostrar=mysqli_fetch_array($result)){	
	 ?>
    	  <tr>
		<td><?php echo $mostrar['Nombre']?></td>
		<td><?php echo $mostrar['Apellido']?></td>
	  </tr>
	<?php
	}
	?>	
      </table>
</div>
