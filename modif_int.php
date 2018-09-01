<?php

$consulta=ConsultarInterno($_GET['id_ingreso']);

function ConsultarInterno( $id_ingreso )
    {
        include 'server.php';
        $sentencia="SELECT * FROM ingreso WHERE id_int='".$id_ingreso."'";
        $result = $conn->query($sppv) or die (mysqli_error($conn));
        $fila=
    }
?>