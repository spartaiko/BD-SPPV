
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from ingresos where id_ingresos='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>