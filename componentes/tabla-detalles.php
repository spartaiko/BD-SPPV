<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

?>

<?php
      
        $sql = "SELECT COUNT(id_ingresos) FROM ingresos WHERE egr_ing='ALOJADO'";
        $result = mysqli_query($conexion,$sql);
        $count = mysqli_fetch_array($result);

        $alojados = $count[0];

        // ARTICULOS
        $sql = "SELECT COUNT(id_ingresos) FROM ingresos WHERE egr_ing='ALOJADO' AND art_ing='ART.34'";
        $result = mysqli_query($conexion,$sql);
        $count = mysqli_fetch_array($result);

        $articulo34 = $count[0];

        $sql = "SELECT COUNT(id_ingresos) FROM ingresos WHERE egr_ing='ALOJADO' AND art_ing='ART.18'";
        $result = mysqli_query($conexion,$sql);
        $count = mysqli_fetch_array($result);

        $articulo18 = $count[0];
        // ARTICULOS

        // PROC/CON
        $sql = "SELECT COUNT(id_ingresos) FROM ingresos WHERE egr_ing='ALOJADO' AND sit_ing='PROCESADO'";
        $result = mysqli_query($conexion,$sql);
        $count = mysqli_fetch_array($result);
 
        $procesado = $count[0];
 
        $sql = "SELECT COUNT(id_ingresos) FROM ingresos WHERE egr_ing='ALOJADO' AND sit_ing='CONDENADO'";
        $result = mysqli_query($conexion,$sql);
        $count = mysqli_fetch_array($result);
 
        $condenado = $count[0];
        // PROC/CON




    
?>

<div class="containter">


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                        <li><a data-toggle="modal" data-target="#modalDetalles" onclick="load();"> <!-- ALOJADOS -->
                                Alojados <span class="badge badge-light"><?php echo $alojados ?></span>
                        </a></li>

                        <li class="dropdown"> <!-- ARTICULOS -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                                aria-expanded="false">Articulos<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" data-toggle="modal" data-target="#modalArticulo34"
                                                onclick="load();">
                                                ART.34 <span class="badge badge-light"><?php echo $articulo34 ?></span>
                                                </a></li>

                                                <li><a class="dropdown-item" data-toggle="modal" data-target="#modalArticulo18"
                                                onclick="load();">
                                                ART.18 <span class="badge badge-light"><?php echo $articulo18 ?></span>
                                                </a></li>
                                        </ul>
                        </li>

                        <li class="dropdown"> <!-- PROC/CON -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                                aria-expanded="false">Procesados/Condenados<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" data-toggle="modal" data-target="#modalPro"
                                                onclick="load();">
                                                PROCESADOS <span class="badge badge-light"><?php echo $procesado ?></span>
                                                </a></li>

                                                <li><a class="dropdown-item" data-toggle="modal" data-target="#modalCon"
                                                onclick="load();">
                                                CONDENADOS <span class="badge badge-light"><?php echo $condenado ?></span>
                                                </a></li>
                                        </ul>
                        </li>


                </ul>
        </div>

</div>

<script type="text/javascript">
        function load(){
                $('#tabla-alojados').load('componentes/tabla-alojados.php');
                $('#tabla-articulo34').load('componentes/tabla-articulo34.php');
                $('#tabla-articulo18').load('componentes/tabla-articulo18.php');
                $('#tabla-condenado').load('componentes/tabla-condenado.php');
                $('#tabla-procesado').load('componentes/tabla-procesado.php');
        }
</script>