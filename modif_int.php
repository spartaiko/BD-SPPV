<?php

$consulta=ConsultarInterno($_GET['id_ingreso']);

function ConsultarInterno( $id_ingreso )
    {
        include 'server.php';
        $sentencia="SELECT * FROM ingreso WHERE id_ingreso='".$id_ingreso."'";
        $result = $conn->query($sentencia) or die (mysqli_error($conn));
        $fila=$result->fetch_assoc();

        return [
            $fila['app_ing'],
            $fila['civil_ing'],
            $fila['cond_sex_ing'],
            $fila['edad_ing'],
            $fila['fecha_ing'],
            $fila['fecha_nac_ing'],
            $fila['id_ingreso'],
            $fila['lpu_ing'],
            $fila['motivo_ing'],
            $fila['naciona_ing'],
            $fila['nom_ing'],
            $fila['org_ing'],
            $fila['sexo_ing'],
            $fila['tipo_ing'],
        ];
    }
?>

<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BS - SPPV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOSTRAP -- CSS  --> 
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <!-- BOOSTRAP -- JS -->
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

    <script defer src="fontawesome-free-5.3.1-web/js/all.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>            
    <!-- CONECTAR CON EL SERVIDOR -->
    <?php
      include 'server.php';
    ?>
    <!-- TOOLTIP - TEXTO LEYENDA -->
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>
    
</head>

<body class="bg-light text-dark">
    <div class="container">
        <div class="jumbotron text-dark"> <!-- HEADER -->
            <h1>Legajo Personal Unico (L.P.U.)</h1>      
            <p>Servicio Psiquiatrico para Varones (H.P.C.I / ALA NORTE)</p>
        </div>

        <form method="POST">

        <div class="form-group"> <!-- APP / NOM / FECHA ING -->
            <div class="row">

                <div class="col">
                    <label> APELLIDO </label>
                    <input type='text' id='app_ing' name='app_ing' value='<?php echo $consulta[0] ?>'><br>
                </div>

                <div class="col">
                    <label> NOMBRE </label>
                    <input type='text' id='nom_ing' name='nom_ing' value='<?php echo $consulta[10] ?>'><br>
                </div>

                <div class="col">
                    <label> FECHA ING. </label>
                    <input type='text' id='fecha_ing' name='fecha_ing' value='<?php echo $consulta[4] ?>'><br>
                </div>
            </div>
        </div>

        <div class="form-group"> <!-- EDAD / SEX / FECHA NAC. -->
            <div class="row">

                <div class="col">
                    <label> APELLIDO </label>
                    <input type='text' id='app_ing' name='app_ing' value='<?php echo $consulta[0] ?>'><br>
                </div>

                <div class="col">
                    <label> NOMBRE </label>
                    <input type='text' id='nom_ing' name='nom_ing' value='<?php echo $consulta[10] ?>'><br>
                </div>

                <div class="col">
                    <label> LPU </label>
                    <input type='text' id='lpu_ing' name='lpu_ing' value='<?php echo $consulta[7] ?>'><br>
                </div>
            </div>
        </div>

        <div class="form-group"> <!-- CON.SEX / EST.CIVIL / ORIGEN -->
            <div class="row">

                <div class="col">
                    <label> APELLIDO </label>
                    <input type='text' id='app_ing' name='app_ing' value='<?php echo $consulta[0] ?>'><br>
                </div>

                <div class="col">
                    <label> NOMBRE </label>
                    <input type='text' id='nom_ing' name='nom_ing' value='<?php echo $consulta[10] ?>'><br>
                </div>

                <div class="col">
                    <label> LPU </label>
                    <input type='text' id='lpu_ing' name='lpu_ing' value='<?php echo $consulta[7] ?>'><br>
                </div>
            </div>
        </div>
<!-- ---------------------------------->
            <br>
            <button type='submit' class='btn btn-success'>Guardar</button>
        </form>








    </div> <!-- CONTAINER -->
<footer class="page-footer font-small blue" style="position: fixed; height: 100px; bottom: 0; width: 100%;">

    <div class="footer-copyright text-center py-3">© 2018 Copyright:
    Ayte. 3ra Juan G. MAGARINOS (Cred. 34.424)
    </div>

</footer> 
</body>
</html>