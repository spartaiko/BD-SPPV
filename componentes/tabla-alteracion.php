<script type="text/javascript" src="node_modules/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script> <!-- dataTables .JS JQUERY -->
<script type="text/javascript" src="node_modules/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script> <!-- dataTables .JS JQUERY -->

<!-- TABLA DATABASE JQUERY -- INICIO -->

		<script type="text/javascript"> // <!-- SCRIPT - PARAS EL LISTADO DATABASE JQUERY -->
		$(document).ready(function() {
			$(".tableAlt").DataTable({
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

<table class="tableAlt table-striped"> <!-- TABLA ALTERACION -->
    <thead>
        <tr>
			<th scope="col">Fecha/Hora</th>
			<th scope="col">Lesion</th>
			<th scope="col">Motivo</th>
        	<th></th>
        </tr>
    </thead>
    
    <tbody>
	<?php
		$sqlquery="SELECT id_ingresos from ingresos";
		$result=mysqli_query($conexion,$sqlquery);
		while($ver=mysqli_fetch_row($result)){ 

			$datos=$ver[0];

        $sql="SELECT id_alteracion,motivo_alt,lesion_alt,fecha_alt,ingresos_id,id_ingresos from 
		alteracion,ingresos WHERE ingresos_id = '".$datos."' ORDER BY id_alteracion DESC";
        $result=mysqli_query($conexion,$sql);
        while($row=mysqli_fetch_row($result)){ 

            $datos=$row[0]."||".
						   $row[1]."||".
						   $row[2]."||".
						   $row[3]."||".
						   $row[4]."||".
						   $row[5];

						   $date = date_create($row[3]);

			 ?>

		<tr style="text-align: center;">
			<td><?php echo date_format($date, 'd/m/Y H:i') ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[1] ?></td>
            <td>
                <a class="btn" data-dismiss="modal" data-toggle="modal" 
                data-target="#">
                <i class='fas fa-eye' style='color:#007bff;'></i>
                </a>
                
                <a class="btn" data-dismiss="modal" 
                onclick="preguntarSiNo('<?php echo $row[0] ?>')">
                <i class='fas fa-trash-alt' style='color:#d9534f;'></i>
                </a>
                
            </td>
        </tr>
        <?php 
        }}
        ?>
    </tbody>
</table>

<script type="text/javascript">
      $(document).ready(function(){
          $('#guardarnuevoAlt').click(function(){
            motivoalt=$('#motivoalt').val();
            lesionalt=$('#lesionalt').val();
            fechaalt=$('#fechaalt').val();

		agregardatosAlt(motivoalt,lesionalt,fechaalt);
	});
});