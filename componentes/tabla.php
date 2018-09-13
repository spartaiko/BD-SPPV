<link rel="stylesheet" type="text/css" href="node_modules/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css"/> <!-- dataTables .CSS -->

<script type="text/javascript" src="node_modules/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script> <!-- dataTables .JS JQUERY -->
<script type="text/javascript" src="node_modules/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script> <!-- dataTables .JS JQUERY -->

<!-- TABLA DATABASE JQUERY -- INICIO -->

		<script type="text/javascript"> // <!-- SCRIPT - PARAS EL LISTADO DATABASE JQUERY -->
		$(document).ready(function() {
			$(".table").DataTable({
			responsive: true,
			"order": [], // --> Se desactiva el modo ordenar
			"language": {
				"lengthMenu": "Mostrar _MENU_ registros por página",
				"search": "Buscar",
				"info":           "Mostrando <b>_START_</b> a <b>_END_</b> de <b>_TOTAL_</b> internos registrados",
				"infoEmpty":      "Mostrando 0 a 0 de 0 entradas",
				"paginate": {
					"first":      "Primero",
					"last":       "Ultimo",
					"next":       "Siguiente",
					"previous":   "Anterior"
				},
			}
			});
		});
		</script>

<!-- TABLA DATABASE JQUERY -- FIN -->
<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-hover table-condensed table-bordered">
			<thead>
				<tr>
					<td>Fecha(Ingreso)</td>
					<td>Apellido</td>
					<td>Nombre</td>
					<td>LPU</td>
					<td>Origen</td>
					<td>Ing/Egr</td>
					<td>...</td>
					<!--
					<td>Nombre</td>
					<td>Apellido</td>
					<td>LPU</td>
					<td>Sexo</td>
					<td>Editar</td>
					<td>Eliminar</td>
					-->
				</tr>
			</thead>

			<?php 

				$sql="SELECT id_ingresos,nom_ing,app_ing,lpu_ing,sexo_ing from ingresos";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>