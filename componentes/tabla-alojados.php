<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

?>

<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Apellido</th>
        <th scope="col">Nombre</th>
        <th scope="col">LPU</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
        $sql="SELECT nom_ing,app_ing,lpu_ing from ingresos WHERE egr_ing='ALOJADO' 
        ORDER BY id_ingresos DESC";
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

            $datos=$ver[0]."||".
                $ver[1]."||".
                $ver[2];
    ?>

        <tr style="text-align: center;">
            <td><?php echo $ver[1] ?></td>
            <td><?php echo $ver[0] ?></td>
            <td><?php echo $ver[2] ?></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>