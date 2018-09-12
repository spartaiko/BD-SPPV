<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['lpu'];
	$t=$_POST['sexo'];

	$sql="INSERT into ingresos (nom_ing,app_ing,lpu_ing,sexo_ing)
								values ('$n','$a','$e','$t')";
	echo $result=mysqli_query($conexion,$sql);

 ?>