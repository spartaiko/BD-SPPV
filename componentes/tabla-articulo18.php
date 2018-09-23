<script type="text/javascript" src="node_modules/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script> <!-- dataTables .JS JQUERY -->
<script type="text/javascript" src="node_modules/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script> <!-- dataTables .JS JQUERY -->

<!-- TABLA DATABASE JQUERY -- INICIO -->

		<script type="text/javascript"> // <!-- SCRIPT - PARAS EL LISTADO DATABASE JQUERY -->
		$(document).ready(function() {
			$(".tablart18").DataTable({
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

<table class="tablart18 table-striped">
    <thead>
        <tr>
			<th scope="col">Apellido</th>
			<th scope="col">Nombre</th>
			<th scope="col">LPU</th>
        	<th></th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
        $sql="SELECT * from ingresos WHERE egr_ing='ALOJADO' AND art_ing='ART.18' 
        ORDER BY id_ingresos DESC";
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

    ?>

        <tr style="text-align: center;">
            <td><?php echo $ver[2] ?></td>
            <td><?php echo $ver[1] ?></td>
            <td><?php echo $ver[3] ?></td>
            <td>
                <a class="btn" data-dismiss="modal" data-toggle="modal" 
                data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>'); editarformTrue();">
                <i class='fas fa-eye' style='color:#007bff;'></i>
                </a>

                <a class="btn" data-dismiss="modal" data-toggle="modal" 
                data-target="#modalLesion" onclick="#">
                <i class='fas fa-file-medical' style='color:#F99922;'></i>
                </a>
                
                <a class="btn" data-dismiss="modal" 
                onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
                <i class='fas fa-trash-alt' style='color:#d9534f;'></i>
                </a>
                
            </td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>