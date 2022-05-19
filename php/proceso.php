<?php
	include '../library/SGBD.php';
	$nombre=$_POST['nombre'];
	$num_control=$_POST['num_control'];
	if(SGBD::Insert("alumnos", "nombre, num_control" "'$nombre', '$num_control'")){
		echo "<script> alert ('Datos guardados'); </script>";
	}else{
		echo "<script> alert ('Error: Datos no guardados'); </script>";
	}
	
	
