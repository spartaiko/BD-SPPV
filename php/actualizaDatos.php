<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$a=$_POST['nombre'];
	$b=$_POST['apellido'];
	$c=$_POST['lpu'];
	$d=$_POST['sexo'];
	$e=$_POST['origen'];
	$f=$_POST['fechaingreso'];
	$g=$_POST['egraloj'];
	$h=$_POST['edad'];
	$i=$_POST['nacionalidad'];
	$j=$_POST['motivo'];
	$k=$_POST['tipoingreso'];
	$l=$_POST['fechanacimiento'];
	$m=$_POST['condsexual'];
	$n=$_POST['civil'];
	$o=$_POST['sitlegal'];
	$p=$_POST['juzgado'];
	$q=$_POST['delito'];
	$r=$_POST['articulo'];

	$sql="UPDATE ingresos set nom_ing='$a',
								app_ing='$b',
								lpu_ing='$c',
								sexo_ing='$d',
								org_int='$e',
								fecha_ing='$f',
								egr_ing='$g',
								edad_ing='$h',
								naciona_ing='$i',
								motivo_ing='$j',
								tipo_ing='$k',
								fecha_nac_ing='$l',
								cond_sex_ing='$m',
								civil_ing='$n',
								sit_ing='$o',
								juz_ing='$p',
								delito_ng='$q',
								art_ing='$r'
				where id_ingresos='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>
