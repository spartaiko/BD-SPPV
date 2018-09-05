<?php
$consulta=ConsultarInterno($_GET['id_ingreso']);

function ConsultarInterno($id_ingreso)
    {
        include 'server.php';
        $sentencia="SELECT * FROM ingreso WHERE id_ingreso='".$id_ingreso."'";
        $result = $conn->query($sentencia) or die (mysqli_error($conn));
        $fila=$result->fetch_assoc();

        return [
            $fila['app_ing'], // 0
            $fila['civil_ing'], // 1
            $fila['cond_sex_ing'], // 2
            $fila['edad_ing'], // 3
            $fila['fecha_ing'], // 4
            $fila['fecha_nac_ing'], // 5
            $fila['id_ingreso'], // 6
            $fila['lpu_ing'], // 7
            $fila['motivo_ing'], // 8
            $fila['naciona_ing'], // 9
            $fila['nom_ing'], // 10
            $fila['org_ing'], // 11
            $fila['sexo_ing'], // 12
            $fila['tipo_ing'], // 13
        ];
    }
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Bootstrap modal</title>
 
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="post" action="modal_result.php" role="form">
	<div class="modal-body">

        <div class="form-group"> <!-- APP / NOM / FECHA ING -->
       

                <div class="col">
                    <label for="id_ingreso"> APELLIDO </label>
                    <input type='text' id='app_ing' name='app_ing' value='<?php echo $consulta[0] ?>'><br>
                </div>

                <div class="col">
                    <label for="id"> NOMBRE </label>
                    <input type='text' id='nom_ing' name='nom_ing' value='<?php echo $consulta[10] ?>'><br>
                </div>

                <div class="col">
                    <label for="id"> FECHA ING. </label>
                    <input type='text' id='fecha_ing' name='fecha_ing' value='<?php echo $consulta[4] ?>'><br>
                </div>
      
        </div>




    </div>

	</form>
</body>
</html>