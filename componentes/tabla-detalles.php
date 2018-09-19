<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

?>

<?php
      
        $sql = "SELECT COUNT(id_ingresos) FROM ingresos WHERE egr_ing='ALOJADO'";
        $result = mysqli_query($conexion,$sql);
        $count = mysqli_fetch_array($result);

        $alojados = $count[0];

        $sql = "SELECT COUNT(id_ingresos) FROM ingresos WHERE egr_ing='EGRESADO'";
        $result = mysqli_query($conexion,$sql);
        $count = mysqli_fetch_array($result);

        $egresado = $count[0];


    
?>

<div class="containter">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetalles">
        Alojados <span class="badge badge-light"><?php echo $alojados ?></span>
        </button>

        <button type="button" class="btn btn-primary btn-sm" style="background-color:#6993CE; border: none;">
        Egresados <span class="badge badge-light"><?php echo $egresado ?></span>
        </button>

        <button type="button" class="btn btn-primary btn-sm" style="background-color:#6993CE; border: none;">
        RIF <span class="badge badge-light"><?php echo $egresado ?></span>
        </button>

        <button type="button" class="btn btn-primary btn-sm" style="background-color:#6993CE; border: none;">
        ART.34 <span class="badge badge-light"><?php echo $egresado ?></span>
        </button>

        <button type="button" class="btn btn-primary btn-sm" style="background-color:#6993CE; border: none;">
        PROCESADOS <span class="badge badge-light"><?php echo $egresado ?></span>
        </button>

        <button type="button" class="btn btn-primary btn-sm" style="background-color:#6993CE; border: none;">
        CONDENADOS <span class="badge badge-light"><?php echo $egresado ?></span>
        </button>

        <button type="button" class="btn btn-primary btn-sm" style="background-color:#6993CE; border: none;">
        H.H. <span class="badge badge-light"><?php echo $egresado ?></span>
        </button>

        <button type="button" class="btn btn-primary btn-sm" style="background-color:#6993CE; border: none;">
        J.A. <span class="badge badge-light"><?php echo $egresado ?></span>
        </button>

</div>


<!--
echo $count[0];

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
-->