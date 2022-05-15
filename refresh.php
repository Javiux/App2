<div id="actualiza">
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
		<td><?php echo $mostrar['Nombre']?></td>
		<td><?php echo $mostrar['Apellido']?></td>
	  </tr>
	<?php
	}
	?>	
      </table>
</div>
