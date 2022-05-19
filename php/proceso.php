<?php
	include '../library/SGBD.php';
	$nombre=$_POST['Nombre'];
	$num_control=$_POST['Apellido'];
	if(SGBD::Insert("alumno", "Nombre, Apellido", "'$nombre', '$num_control'")){
		echo "<script> alert ('Datos guardados'); </script>";
	}else{
		echo "<script> alert ('Error: Datos no guardados'); </script>";
	}
	
	
