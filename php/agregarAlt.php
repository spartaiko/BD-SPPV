<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$a=$_POST['motivoalt'];
	$b=$_POST['lesionalt'];
	$c=$_POST['fechaalt'];

	$sql="INSERT into alteracion (motivo_alt,lesion_alt,fecha_alt)
	values ($a','$b','$c')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
