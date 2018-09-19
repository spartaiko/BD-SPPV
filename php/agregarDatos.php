<?php 

	require_once "conexion.php";
	$conexion=conexion();
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

	$sql="INSERT into ingresos (nom_ing,app_ing,lpu_ing,sexo_ing,org_int,fecha_ing,egr_ing,edad_ing,naciona_ing,
	motivo_ing,tipo_ing,fecha_nac_ing,cond_sex_ing,civil_ing,sit_ing,juz_ing,delito_ng,art_ing)
	values ('$a','$b','$c','$d','$e','$f','$g','$h',
	'$i','$j','$k','$l','$m','$n','$o','$p','$q','$r')";
	echo $result=mysqli_query($conexion,$sql);

 ?>

<!-- LISTADO ATRIBUTOS

	id_ingresos     -- id_ingreso       --  0
	nom_ing         -- nombre           --  1
	app_ing         -- apellido         --  2
	lpu_ing         -- lpu              --  3
	sexo_ing        -- sexo             --  4
	org_int         -- origen           --  5
	fecha_ing       -- fechaingreso     --  6
	egr_ing         -- egraloju         --  7
	edad_ing        -- edad             --  8
	naciona_ing     -- nacionalidad     --  9
	motivo_ing      -- motivo           --  10
	tipo_ing        -- tipoingreso      --  11
	fecha_nac_ing   -- fechanacimiento  --  12
	cond_sex_ing    -- condsexual       --  13
	civil_ing       -- civil            --  14
	sit_ing         -- sitlegal         --  15
	juz_ing         -- juzgado          --  16
	delito_ing      -- delito           --  17
	art_ing         -- articulo         --  18

-->