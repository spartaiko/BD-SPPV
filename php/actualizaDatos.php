<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['lpu'];
	$t=$_POST['sexo'];

	$sql="UPDATE ingresos set nom_ing='$n',
								app_ing='$a',
								lpu_ing='$e',
								sexo_ing='$t'
				where id_ingresos='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>