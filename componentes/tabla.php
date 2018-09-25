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
				}
			},	
			"rowCallback": function(row, data, index){
				if(data[5].toUpperCase() == 'EGRESADO'){
					$(row).find('td:eq(0)').css('background-color', '#F5B2B3'),
					$(row).find('td:eq(1)').css('background-color', '#F5B2B3'),
					$(row).find('td:eq(2)').css('background-color', '#F5B2B3'),
					$(row).find('td:eq(3)').css('background-color', '#F5B2B3'),
					$(row).find('td:eq(4)').css('background-color', '#F5B2B3'),
					$(row).find('td:eq(5)').css('background-color', '#F5B2B3');
				}
			},
			"columnDefs": [
				{ className: "herr", "targets": [ 6 ] }
			]
			
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
				<tr style="text-align: center;">
					<td style="font-weight: bold; font-size: large;">Fecha(Ingreso)</td>
					<td style="font-weight: bold; font-size: large;">Apellido</td>
					<td style="font-weight: bold; font-size: large;">Nombre</td>
					<td style="font-weight: bold; font-size: large;">LPU</td>
					<td style="font-weight: bold; font-size: large;">Origen</td>
					<td style="font-weight: bold; font-size: large;">Aloj/Egr</td>
					<td style="font-weight: bold; font-size: large;"></td>
				</tr>
			</thead>

			<?php 

				$sql="SELECT * from ingresos ORDER BY id_ingresos DESC";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7]."||".
						   $ver[8]."||".
						   $ver[9]."||".
						   $ver[10]."||".
						   $ver[11]."||".
						   $ver[12]."||".
						   $ver[13]."||".
						   $ver[14]."||".
						   $ver[15]."||".
						   $ver[16]."||".
						   $ver[17]."||".
						   $ver[18];

						   $date = date_create($ver[6]);

			 ?>

			<tr style="text-align: center;">
				<td><?php echo date_format($date, 'd/m/Y H:i') ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td>
					<a class="btn" data-toggle="modal" 
					data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>'); editarformTrue();">
					<i class='fas fa-eye' style='color:#007bff;'></i>
					</a>
					
					<a class="btn" data-toggle="modal" 
					data-target="#modalAlteracion" onclick="agregaformalt('<?php echo $datos ?>'); idTableAlt('<?php echo $ver[0] ?>')">
					<i class='fas fa-file-medical' style='color:#F99922;'></i>
					</a>
					
					<a class="btn" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
					<i class='fas fa-trash-alt' style='color:#d9534f;'></i>
					</a>
					
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>

<!-- SCRIPT editarformTrue -->
	<script type="text/javascript">
	function editarformTrue(){

			document.getElementById("apellidou").disabled = true;
			document.getElementById("nombreu").disabled = true;
			document.getElementById("fechaingresou").disabled = true;
   			document.getElementById("egraloju").disabled = true;
			document.getElementById("edadu").disabled = true;
			document.getElementById("sexou").disabled = true;
			document.getElementById("fechanacimientou").disabled = true;
			document.getElementById("condsexualu").disabled = true;
			document.getElementById("civilu").disabled = true;
			document.getElementById("nacionalidadu").disabled = true;
			document.getElementById("tipoingresou").disabled = true;
			document.getElementById("lpuu").disabled = true;
			document.getElementById("sitlegalu").disabled = true;
			document.getElementById("origenu").disabled = true;
			document.getElementById("motivou").disabled = true;
			document.getElementById("juzgadou").disabled = true;
			document.getElementById("delitou").disabled = true;
			document.getElementById("articulou").disabled = true;
			document.getElementById("editar_registro").disabled = false;


		}
	</script>
<!-- SCRIPT editarformTrue -->